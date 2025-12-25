<?php
/* Smarty version 4.5.4, created on 2025-07-15 10:05:02
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\dashboards\DashBoardTabContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_687627ce7b9129_44188613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eebfa19f9d523b973413f8373e1dc98eb9322309' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\dashboards\\DashBoardTabContents.tpl',
      1 => 1752573901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_687627ce7b9129_44188613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='dashBoardTabContainer'><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "dashboards/DashBoardHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?><br><div class="dashboardBanner"></div><div class="highlight-card-container"><div class="row"><!-- Bookings --><div class="col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box primary-color"><img src="layouts/v7/skins/images/ticket.svg" alt="ticket" /></div><div class="highlight-card-content"><div><p class="highlight-title">Bookings</p></div><div><h3 class="highlight-value">281</h3></div></div></div><hr><div class="card-footer"><div class="status"><span>+55%</span> than last week</div></div></div></div><!-- Today's Users --><div class="col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box dark-blue-color"><img src="layouts/v7/skins/images/benefits.svg" alt="ticket" /></div><div class="highlight-card-content"><div><p class="highlight-title">Today's Users</p></div><div><h3 class="highlight-value">2,300</h3></div></div></div><hr><div class="card-footer"><div class="status"><span>+3%</span> than last month</div></div></div></div><!-- Revenue --><div class="col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box green-color"><img src="layouts/v7/skins/images/revenue.svg" alt="ticket" /></div><div class="highlight-card-content"><div><p class="highlight-title">Revenue</p></div><div><h3 class="highlight-value">34k</h3></div></div></div><hr><div class="card-footer"><div class="status"><span>+1%</span> than yesterday</div></div></div></div><!-- Followers --><div class="col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box pink-color"><img src="layouts/v7/skins/images/add-user.svg" alt="ticket" /></div><div class="highlight-card-content"><div><p class="highlight-title">Followers</p></div><div><h3 class="highlight-value">+91</h3></div></div></div><hr><div class="card-footer"><div class="status">Just updated</div></div></div></div></div></div><div class="dashBoardTabContents clearfix"><div class="gridster_<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><?php $_smarty_tpl->_assignInScope('ROWCOUNT', 0);
$_smarty_tpl->_assignInScope('COLCOUNT', 0);?><ul class="test"><?php $_smarty_tpl->_assignInScope('COLUMNS', 2);
$_smarty_tpl->_assignInScope('ROW', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET', false, NULL, 'count', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']++;
$_smarty_tpl->_assignInScope('WIDGETDOMID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'));
if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName() == 'MiniList') {
$_smarty_tpl->_assignInScope('WIDGETDOMID', ($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')));
} elseif ($_smarty_tpl->tpl_vars['WIDGET']->value->getName() == 'Notebook') {
$_smarty_tpl->_assignInScope('WIDGETDOMID', ($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')));
}
if ($_smarty_tpl->tpl_vars['WIDGETDOMID']->value) {?><li id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) != 0) {?> <?php $_smarty_tpl->_assignInScope('ROWCOUNT', $_smarty_tpl->tpl_vars['ROW']->value+1);?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
" <?php } else { ?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROW']->value);?>
" <?php }
$_smarty_tpl->_assignInScope('COLCOUNT', ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value)+1);?> data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
" data-sizex="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeX();?>
" data-sizey="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeY();?>
" <?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('position') == '') {?> data-position="false"<?php }?>class="dashboardWidget dashboardWidget_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null);?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
" data-mode="open" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"></li><?php } else {
$_smarty_tpl->_assignInScope('CHARTWIDGETDOMID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('reportid'));
$_smarty_tpl->_assignInScope('WIDGETID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('id'));?><li id="<?php echo $_smarty_tpl->tpl_vars['CHARTWIDGETDOMID']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['WIDGETID']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) != 0) {?> <?php $_smarty_tpl->_assignInScope('ROWCOUNT', $_smarty_tpl->tpl_vars['ROW']->value+1);?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
" <?php } else { ?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROW']->value);?>
" <?php }
$_smarty_tpl->_assignInScope('COLCOUNT', ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value)+1);?> data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
" data-sizex="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeX();?>
" data-sizey="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeY();?>
" <?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('position') == '') {?> data-position="false"<?php }?>class="dashboardWidget dashboardWidget_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null);?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
" data-mode="open" data-name="ChartReportWidget"></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><li><div id="chart"><div id="timeline-chart"></div></div></li><li><div id="chart2"></div></li><li><div id="chart3"></div></li></ul><input type="hidden" id=row value="<?php echo $_smarty_tpl->tpl_vars['ROWCOUNT']->value;?>
" /><input type="hidden" id=col value="<?php echo $_smarty_tpl->tpl_vars['COLCOUNT']->value;?>
" /><input type="hidden" id="userDateFormat" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('date_format');?>
" /></div></div></div>






<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/apexcharts"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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

<?php echo '</script'; ?>
>

<?php }
}
