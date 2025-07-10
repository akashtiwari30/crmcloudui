{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}

{strip}
	<div class='dashBoardTabContainer'>
		{include file="dashboards/DashBoardHeader.tpl"|vtemplate_path:$MODULE_NAME DASHBOARDHEADER_TITLE=vtranslate($MODULE, $MODULE)}
		<br><div class="dashboardBanner"></div>
		
	{*	highlight-card start here *}

<div class="highlight-card-container">

    <!-- Bookings -->
    <div class="highlight-card">
      <div class="highlight-card-header">
		<div class="icon-box primary-color">
			<img src="layouts/v7/skins/images/ticket.svg" alt="ticket" />
		</div>
		<div class="highlight-card-content">
			<div>
				<p class="highlight-title">Bookings</p>
			</div>
			<div>
				<h3 class="highlight-value">281</h3>
			</div>
			
		</div>
      </div>
	  <hr>
	  <div class="card-footer">
        <div class="status"><span>+55%</span> than last week</div>
      </div>
    </div>

    <!-- Today's Users -->
   <div class="highlight-card">
      <div class="highlight-card-header">
		<div class="icon-box dark-blue-color">
			<img src="layouts/v7/skins/images/benefits.svg" alt="ticket" />
		</div>
		<div class="highlight-card-content">
			<div>
				<p class="highlight-title">Today's Users</p>
			</div>
			<div>
				<h3 class="highlight-value">2,300</h3>
			</div>
			
		</div>
      </div>
	  <hr>
	  <div class="card-footer">
        <div class="status"><span>+3%</span> than last month</div>
      </div>
    </div>

    <!-- Revenue -->
    <div class="highlight-card">
      <div class="highlight-card-header">
		<div class="icon-box green-color">
			<img src="layouts/v7/skins/images/revenue.svg" alt="ticket" />
		</div>
		<div class="highlight-card-content">
			<div>
				<p class="highlight-title">Revenue</p>
			</div>
			<div>
				<h3 class="highlight-value">34k</h3>
			</div>
			
		</div>
      </div>
	  <hr>
	  <div class="card-footer">
        <div class="status"><span>+1%</span> than yesterday</div>
      </div>
    </div>

    <!-- Followers -->
    <div class="highlight-card">
      <div class="highlight-card-header">
		<div class="icon-box pink-color">
			<img src="layouts/v7/skins/images/add-user.svg" alt="ticket" />
		</div>
		<div class="highlight-card-content">
			<div>
				<p class="highlight-title">Followers</p>
			</div>
			<div>
				<h3 class="highlight-value">+91</h3>
			</div>
			
		</div>
      </div>
	  <hr>
	  <div class="card-footer">
        <div class="status">Just updated</div>
      </div>
    </div>

  </div>

	{*	highlight-card end here *}


		<div class="dashBoardTabContents clearfix">
			<div class="gridster_{$TABID}">
				{assign var="ROWCOUNT" value=0}
				{assign var="COLCOUNT" value=0}
				<ul class="test">
					{assign var=COLUMNS value=2}
					{assign var=ROW value=1}
					{foreach from=$WIDGETS item=WIDGET name=count}
						{assign var=WIDGETDOMID value=$WIDGET->get('linkid')}

						{if $WIDGET->getName() eq 'MiniList'}
							{assign var=WIDGETDOMID value=$WIDGET->get('linkid')|cat:'-':$WIDGET->get('widgetid')}
						{elseif $WIDGET->getName() eq 'Notebook'}
							{assign var=WIDGETDOMID value=$WIDGET->get('linkid')|cat:'-':$WIDGET->get('widgetid')}
						{/if}
						{if $WIDGETDOMID}
							<li id="{$WIDGETDOMID}" {if $smarty.foreach.count.index % $COLUMNS == 0 and $smarty.foreach.count.index != 0} {assign var=ROWCOUNT value=$ROW+1} data-row="{$WIDGET->getPositionRow($ROWCOUNT)}" {else} data-row="{$WIDGET->getPositionRow($ROW)}" {/if}
								{assign var=COLCOUNT value=($smarty.foreach.count.index % $COLUMNS)+1} data-col="{$WIDGET->getPositionCol($COLCOUNT)}" data-sizex="{$WIDGET->getSizeX()}" data-sizey="{$WIDGET->getSizeY()}" {if $WIDGET->get('position') eq ""} data-position="false"{/if}
								class="dashboardWidget dashboardWidget_{$smarty.foreach.count.index}" data-url="{$WIDGET->getUrl()}" data-mode="open" data-name="{$WIDGET->getName()}">
							</li>
						{else}
							{assign var=CHARTWIDGETDOMID value=$WIDGET->get('reportid')}
							{assign var=WIDGETID value=$WIDGET->get('id')}
							<li id="{$CHARTWIDGETDOMID}-{$WIDGETID}" {if $smarty.foreach.count.index % $COLUMNS == 0 and $smarty.foreach.count.index != 0} {assign var=ROWCOUNT value=$ROW+1} data-row="{$WIDGET->getPositionRow($ROWCOUNT)}" {else} data-row="{$WIDGET->getPositionRow($ROW)}" {/if}
								{assign var=COLCOUNT value=($smarty.foreach.count.index % $COLUMNS)+1} data-col="{$WIDGET->getPositionCol($COLCOUNT)}" data-sizex="{$WIDGET->getSizeX()}" data-sizey="{$WIDGET->getSizeY()}" {if $WIDGET->get('position') eq ""} data-position="false"{/if}
								class="dashboardWidget dashboardWidget_{$smarty.foreach.count.index}" data-url="{$WIDGET->getUrl()}" data-mode="open" data-name="ChartReportWidget"> 
							</li>
						{/if}
					{/foreach}


				{*	custom chart start here *}
					<li>
						<div id="chart">
							<div id="timeline-chart"></div>
						</div>
					</li>
					<li>
						<div id="chart2">
						</div>
					</li>
					<li>
						<div id="chart3">
						</div>
					</li>
				

					{*	custom chart end here *} 


				</ul>
				<input type="hidden" id=row value="{$ROWCOUNT}" />
				<input type="hidden" id=col value="{$COLCOUNT}" />
				<input type="hidden" id="userDateFormat" value="{$CURRENT_USER->get('date_format')}" />
			</div>
		</div>
	</div>
{/strip}






<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
//  Chart one 

var options = {
      chart: {
        type: "area",
        height: 250,
        foreColor: "#999",
        stacked: true,
        dropShadow: {
          enabled: true,
          enabledSeries: [0],
          top: -2,
          left: 2,
          blur: 5,
          opacity: 0.06
        }
      },
      colors: ['var(--chart-color-3)', 'var(--primary-color)'],
      stroke: {
        curve: "smooth",
        width: 3
      },
      dataLabels: {
        enabled: false
      },
      series: [{
        name: 'Total Views',
        data: generateDayWiseTimeSeries(0, 18)
      }, {
        name: 'Unique Views',
        data: generateDayWiseTimeSeries(1, 18)
      }],
      markers: {
        size: 0,
        strokeColor: "#fff",
        strokeWidth: 3,
        strokeOpacity: 1,
        fillOpacity: 1,
        hover: {
          size: 6
        }
      },
      xaxis: {
        type: "datetime",
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        }
      },
      yaxis: {
        labels: {
          offsetX: 14,
          offsetY: -5
        },
        tooltip: {
          enabled: true
        }
      },
      grid: {
        padding: {
          left: -5,
          right: 5
        }
      },
      tooltip: {
        x: {
          format: "dd MMM yyyy"
        },
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left'
      },
      fill: {
        type: "solid",
        fillOpacity: 0.7
      }
    };

    var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);

    chart.render();

    function generateDayWiseTimeSeries(s, count) {
      var values = [[
        4,3,10,9,29,19,25,9,12,7,19,5,13,9,17,2,7,5
      ], [
        2,3,8,7,22,16,23,7,11,5,12,5,10,4,15,2,6,2
      ]];
      var i = 0;
      var series = [];
      var x = new Date("11 Nov 2012").getTime();
      while (i < count) {
        series.push([x, values[s][i]]);
        x += 86400000;
        i++;
      }
      return series;
    }


	// chart two 


	var options = {
  chart: {
    height: 250,
    type: "line"
  },
  
   colors: ['var(--primary-color)', 'var(--chart-color-4)'],
  dataLabels: {
    enabled: true,
    enabledOnSeries: [1],
    formatter: function (val) {
      return val + "%";
    }
  },
  stroke: {
    curve: "straight",
    width: [0, 4]
  },
  title: {
    text: "Organic Sessions",
    align: "center"
  },
  series: [
    {
      name: "Sessions",
      type: "column",
      data: [
        108,
        22,
        43,
        130,
        22,
        108,
        259,
        303,
        368,
        259,
        476,
        865,
        1059,
        1167,
        2075,
        2443
      ]
    },
    {
      name: "Bounce rate",
      type: "line",
      data: [100, 100, 100, 83, 0, 80, 50, 64, 23, 67, 59, 80, 86, 85, 76, 86]
    }
  ],
  xaxis: {
    categories: [
      "2020-09-01",
      "2020-11-01",
      "2020-12-01",
      "2021-01-01",
      "2021-02-01",
      "2021-03-01",
      "2021-04-01",
      "2021-05-01",
      "2021-06-01",
      "2021-07-01",
      "2021-08-01",
      "2021-09-01",
      "2021-10-01",
      "2021-11-01",
      "2021-12-01",
      "2022-01-01"
    ],
    type: "datetime"
  },
  yaxis: [
    {
      title: {
        text: "Sessions"
      }
    },
    {
      title: {
        text: "Bounce Rate"
      },
      opposite: true,
      labels: {
        formatter: function (val) {
          return val + "%";
        }
      }
    }
  ],
  legend: {
    position: "top"
  },
};

var chart = new ApexCharts(document.querySelector("#chart2"), options);

chart.render();


// chart three 

var series = [23, 44, 3, 21, 3, 1, 2]
      let labels = [
        'Team A',
        'Team B',
        'Team C',
        'Team D',
        'Team E',
        'Team F',
        'Team G'
      ]

      let newSeries = []
      let newLabels = []
      let grouped = 0
      series.forEach((s, i) => {
        if (s < 10) {
          grouped += s
        }
        if (s >= 10) {
          newSeries.push(s)
          newLabels.push(labels[i])
        }
      })

      if (grouped > 0) {
        newSeries.push(grouped)
        newLabels.push('Others')
      }

      var options = {
        series: newSeries,
        chart: {
          width: 350,
		   height: 250,
          type: 'pie'
        },
		
		colors: ['var(--primary-color)', 'var(--chart-color-2)', 'var(--chart-color-3)', 'var(--chart-color-4)'],
        labels: newLabels
      }

      var chart = new ApexCharts(document.querySelector('#chart3'), options)
      chart.render()

</script>

