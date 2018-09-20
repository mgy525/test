          
// 基于准备好的dom，初始化echarts图表
var mycharts = echarts.init(document.getElementById('main')); 

 var optionObj = {
    title : {
        text: '借款金额统计',
        subtext: '2018-09-20统计',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'vertical',
        x : 'left',
        data:[]
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[]
        }
    ]
};
// 为echarts对象加载数据 
mycharts.setOption(optionObj); 

// 向后台发送请求 获取报表数据
$.get("./api/borrowData.php",function (result) {
    console.log(result);
    optionObj.legend.data=result.title; //修改统计的图例数据
    optionObj.series[0].data=result.data; //修改统计的序列数据

    mycharts.hideLoading(); //隐藏loading动画
    mycharts.setOption(optionObj); //把新的配置设置到报表中
},"json");
