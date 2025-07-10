#!/bin/sh

echo "Fetching approved users..."

DB_NAME="vtiger_crm"
MYSQL_PATH="C:\xampp\mysql\bin/mysql.exe"
XAMPP_DIR="C:/xampp/htdocs"

PARENT_CRON_ID=$1
CRON_ID=$$

update_failure_status() {
    END_TIME=$(date '+%Y-%m-%d %H:%M:%S')
    UPDATE_SQL="UPDATE clone_run_history SET status='2', completed_at='$END_TIME' WHERE process_id='$CRON_ID' AND created_at='$START_TIME'"
    echo "Updating failure status: $UPDATE_SQL"
    $MYSQL_PATH -u root -D "$DB_NAME" -e "$UPDATE_SQL"
    exit 1
}

trap 'update_failure_status' ERR

START_TIME=$(date '+%Y-%m-%d %H:%M:%S')
INSERT_SQL="INSERT INTO clone_run_history (cron_id, process_id, status, created_at) VALUES ('$PARENT_CRON_ID', '$CRON_ID', '0', '$START_TIME')"
echo "Inserting record: $INSERT_SQL"
$MYSQL_PATH -u root -D "$DB_NAME" -e "$INSERT_SQL"

# Assigning values from command-line arguments
ID=$1
USER_ID=$2
USERNAME=$3 
PRODUCT_PATH=$4
PRODUCT_DB=$5
NAME=$6
EMAIL=$7
SITEID=$9
RECORDID=${10}

echo "Processing user: '$USERNAME' with product: '$PRODUCT_PATH'"



NEW_PROJECT_DIR="$XAMPP_DIR/$USERNAME"
ZIP_FILE="$PRODUCT_PATH"

mkdir -p "$NEW_PROJECT_DIR"

echo "Extracting '$ZIP_FILE' to '$NEW_PROJECT_DIR'..."
unzip -o "$ZIP_FILE" -d "$NEW_PROJECT_DIR"
chmod -R 755 "$NEW_PROJECT_DIR"

echo "Verifying extraction..."
SRC_COUNT=$(unzip -l "$ZIP_FILE" | grep -v '/$' | wc -l)
DEST_COUNT=$(find "$NEW_PROJECT_DIR" -type f | wc -l)

if [ "$SRC_COUNT" -eq "$DEST_COUNT" ]; then
  echo "✅ Extraction successful — All files copied!"
else
  echo "⚠️ File count mismatch: zip($SRC_COUNT), extracted($DEST_COUNT)"
fi


echo "Creating database: '$USERNAME'"
"$MYSQL_PATH" -u root -e "CREATE DATABASE $USERNAME;" || update_failure_status

SQL_FILE="$XAMPP_DIR/$PRODUCT_DB.sql"
if [ -f "$SQL_FILE" ]; then
    "$MYSQL_PATH" -u root $USERNAME < "$SQL_FILE" || update_failure_status
    echo "Imported '$SQL_FILE' into '$USERNAME'"
else
    echo "SQL file '$SQL_FILE' not found! Skipping import..."
fi

cat > "$NEW_PROJECT_DIR/config.inc.php" <<EOF
<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the 
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
********************************************************************************/

version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED & E_ERROR) : error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED  & E_ERROR & ~E_STRICT);

include('vtigerversion.php');

ini_set('memory_limit','512M');

\$CALENDAR_DISPLAY = 'true';
\$USE_RTE = 'true';

\$HELPDESK_SUPPORT_EMAIL_ID = 'jifinjosy007@gmail.com';
\$HELPDESK_SUPPORT_NAME = 'your-support name';
\$HELPDESK_SUPPORT_EMAIL_REPLY_ID = \$HELPDESK_SUPPORT_EMAIL_ID;

\$dbconfig['db_server'] = 'localhost';
\$dbconfig['db_port'] = ':3306';
\$dbconfig['db_username'] = 'root';
\$dbconfig['db_password'] = '';
\$dbconfig['db_name'] = '$USERNAME';
\$dbconfig['db_type'] = 'mysqli';
\$dbconfig['db_status'] = 'true';

\$dbconfig['db_hostname'] = \$dbconfig['db_server'].\$dbconfig['db_port'];

\$dbconfig['log_sql'] = false;

\$dbconfigoption['persistent'] = true;
\$dbconfigoption['autofree'] = false;
\$dbconfigoption['debug'] = 0;
\$dbconfigoption['seqname_format'] = '%s_seq';
\$dbconfigoption['portability'] = 0;
\$dbconfigoption['ssl'] = false;

\$host_name = \$dbconfig['db_hostname'];

\$siteID = $RECORDID;
global \$siteID;

\$site_URL = 'http://localhost/$USERNAME/';
\$PORTAL_URL = \$site_URL.'/customerportal';
\$root_directory = 'C:\\xampp\\htdocs\\$USERNAME/';
\$cache_dir = 'cache/';
\$tmp_dir = 'cache/images/';
\$import_dir = 'cache/import/';
\$upload_dir = 'cache/upload/';
\$upload_maxsize = 3145728;

\$allow_exports = 'all';

\$upload_badext = array('php', 'php3', 'php4', 'php5', 'pl', 'cgi', 'py', 'asp', 'cfm', 'js', 'vbs', 'html', 'htm', 'exe', 'bin', 'bat', 'sh', 'dll', 'phps', 'phtml', 'xhtml', 'rb', 'msi', 'jsp', 'shtml', 'sth', 'shtm', 'htaccess');

\$list_max_entries_per_page = '20';
\$history_max_viewed = '5';
\$default_action = 'index';
\$default_theme = 'softed';
\$default_user_name = '';
\$default_password = '';
\$create_default_user = false;

\$currency_name = 'India, Rupees';
\$default_charset = 'UTF-8';
\$default_language = 'en_us';
\$display_empty_home_blocks = false;
\$disable_stats_tracking = false;

\$application_unique_key = '72c77c556128b86eef6cbb14d4abfe24';
\$listview_max_textlength = 40;
\$php_max_execution_time = 0;
\$default_timezone = 'UTC';

if(isset(\$default_timezone) && function_exists('date_default_timezone_set')) {
	@date_default_timezone_set(\$default_timezone);
}

\$default_layout = 'v7';
\$maxListFieldsSelectionSize = 15;

include_once 'config.security.php';
?>
EOF


echo "Config file created at '$NEW_PROJECT_DIR/config.inc.php'"

INSERT_SQL="INSERT INTO cloned_products (cloud_user_id, product, product_url, product_path, product_db, created_at, trial_expiry_date, product_status, trial_status)
VALUES ('$USER_ID', '$PRODUCT_PATH', 'http://localhost/$USERNAME', '$NEW_PROJECT_DIR', '$USERNAME', NOW(), DATE_ADD(NOW(), INTERVAL 14 DAY), '1', '1')"

echo "Inserting data into cloned_products for user '$USERNAME'..."
"$MYSQL_PATH" -u root -D "$DB_NAME" -e "$INSERT_SQL" || update_failure_status

TODAY=$(date +%F)
AFTER_14_DAYS=$(date -d "+14 days" +%F)

UPDATE_SQL="UPDATE vtiger_potentialscf AS cf
JOIN vtiger_potential AS p ON p.potentialid = cf.potentialid
SET cf.cf_853 = 'http://localhost/$USERNAME',
    cf.cf_873 = 'Active',
    cf.cf_875 = 'Active',
    cf.cf_877 = '$TODAY',
    cf.cf_879 = '$AFTER_14_DAYS',
    cf.cf_881 = 'First Trial Period',
    cf.cf_885 = '$USERNAME',
    cf.cf_887 = '$NEW_PROJECT_DIR'
WHERE p.potential_no = '$SITEID';"

echo "Inserting data into potential_cf for user '$USERNAME'..."
"$MYSQL_PATH" -u root -D "$DB_NAME" -e "$UPDATE_SQL" || update_failure_status




echo "sending mail to '$EMAIL'"

TO_EMAIL=$EMAIL
FROM_EMAIL="crmdoctorsaas@gmail.com"
SUBJECT="New CRM Instance Created: $USERNAME"
BASE_URL="http://localhost/$USERNAME"
SITE_USERNAME="admin"
SITE_PASSWORD="admin@123"

BODY=$(cat <<EOF
<!DOCTYPE html>
<html>
<head>
    <title>New CRM Instance Created</title>
</head>
<body>
    <p>Dear $NAME,</p>
    <p>Your new CRM instance has been successfully created.</p>
    <p><strong>Base URL:</strong> <a href="$BASE_URL">$BASE_URL</a></p>
    <p><strong>Username:</strong> $SITE_USERNAME</p>
    <p><strong>Password:</strong> $SITE_PASSWORD</p>
</body>
</html>
EOF
)

/c/xampp_7.4/sendmail/sendmail.exe -t <<EOF
From: $FROM_EMAIL
To: $TO_EMAIL
Subject: $SUBJECT
MIME-Version: 1.0
Content-Type: text/html; charset=UTF-8

$BODY
EOF

if [ $? -ne 0 ]; then
    echo "Email sending failed. Updating clone_run_history with status = 2"
    END_TIME=$(date '+%Y-%m-%d %H:%M:%S')
    UPDATE_SQL="UPDATE clone_run_history SET status='2', completed_at='$END_TIME' WHERE process_id='$CRON_ID' AND created_at='$START_TIME'"
    $MYSQL_PATH -u root -D "$DB_NAME" -e "$UPDATE_SQL"
    exit 1
fi

UPDATE_SQL="UPDATE cron_queue SET queue_status='1', completion_status='1' WHERE id='$ID'"
echo "Updating completion status for user '$USERNAME' with ID '$ID'..."
"$MYSQL_PATH" -u root $DB_NAME -e "$UPDATE_SQL" || update_failure_status

END_TIME=$(date '+%Y-%m-%d %H:%M:%S')
UPDATE_SQL="UPDATE clone_run_history SET status='1', completed_at='$END_TIME' WHERE process_id='$CRON_ID' AND created_at='$START_TIME'"
echo "Updating record: $UPDATE_SQL"
$MYSQL_PATH -u root -D "$DB_NAME" -e "$UPDATE_SQL"

echo "Process completed."
