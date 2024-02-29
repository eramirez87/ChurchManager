class HomePage{
    constructor(){
        this.labelMonths = ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'];
        return;
    }
    RequestChart(id,data){
        const ctx = document.getElementById(id);
        let balance = [];
        for (let index = 0; index < 12; index++) {
            balance.push( data.aproved[index] + data.rejected[index] + data.pending[index] );
        }
        new Chart(ctx, {
            type: 'line',
            data: {
              labels: this.labelMonths,
              datasets: [{
                label: 'Aproved',
                data: data.aproved,
                borderWidth: 1
              },{
                label: 'Rejected',
                data: data.rejected,
                borderWidth: 1
              },{
                label: 'Pending',
                data: data.pending,
                borderWidth: 1
              },{
                label: 'Total',
                fill:'origin',
                data: balance,
                borderWidth: 1
              }
            ]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
    }
    BalanceChart(id,data){
        const ctx = document.getElementById(id);
        let balance = [];
        for (let index = 0; index < 12; index++) {
            balance.push( data.offerings[index] - data.payments[index] );
        }
        new Chart(ctx, {
            type: 'line',
            data: {
              labels: this.labelMonths,
              datasets: [{
                label: 'Offerings',
                data: data.offerings,
                borderWidth: 1
              },{
                label: 'Payments',
                data: data.payments,
                borderWidth: 1
              },{
                label: 'Balance',
                fill:'origin',
                data: balance,
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  ticks: {
                    callback: function (value, index, values) {
                        return value.toLocaleString("en-US", {
                            style: "currency", 
                            currency: "USD", 
                            minimumFractionDigits:0, 
                            maximumFractionDigits:0});
                    }
                }
                }
              }
            }
          });
    }
    MinistryCalendar(id){
      var calendarEl = document.getElementById(id);
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
      });
      calendar.render();
    }
}