#!/bin/bash

echo "Running script at $(date)"

DB_NAME="real1"
MYSQL_PATH="C:/xampp/mysql/bin/mysql.exe"
CRON_ID=$$ # Get the current process ID (PID) as CRON_ID

# Insert record ONLY ONCE when script starts
START_TIME=$(date '+%Y-%m-%d %H:%M:%S')
INSERT_SQL="INSERT INTO cron_run_history (cron_id, status, created_at) VALUES ('$CRON_ID', '0', '$START_TIME')"
echo "Inserting record: $INSERT_SQL"
$MYSQL_PATH -u root -D "$DB_NAME" -e "$INSERT_SQL"

while true; do
echo "Executing autorun.sh..."
sh autorun.sh "$CRON_ID"


# Update status after each successful execution
END_TIME=$(date '+%Y-%m-%d %H:%M:%S')
UPDATE_SQL="UPDATE cron_run_history SET status='9', completed_at='$END_TIME' WHERE cron_id='$CRON_ID'"
echo "Updating record: $UPDATE_SQL"
$MYSQL_PATH -u root -D "$DB_NAME" -e "$UPDATE_SQL"

echo "Sleeping for 30 minutes..."
sleep 1800
done