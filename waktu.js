var ziarray=new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu")
    var lunaarray=new Array ("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember")

    function datacom() {
      var mydate=new Date()
      var year=mydate.getYear()
      if (year < 1000)
        year+=1900
      var day=mydate.getDay()
      var month=mydate.getMonth()
      var daym=mydate.getDate()
      if (daym<10)
        daym="0"+daym
      var hours=mydate.getHours()
      var minutes=mydate.getMinutes()
      var seconds=mydate.getSeconds()
      var dn="WIB"
      
      if (minutes<=9)
        minutes="0"+minutes
      if (seconds<=9)
        seconds="0"+seconds
    
     var cdate="<medium><font color='gold' face='default'><b>"+ziarray[day]+", "+daym+" "+lunaarray[month]+" "+year+"<br> "+hours+":"+minutes+":"+seconds+" "+dn
    +"</b></font></medium>"

 
      document.getElementById("data").innerHTML=cdate
    }

    function arata() {
      if (document.getElementById("data"))
        setInterval("datacom()",1000)
    }
    window.onload=arata;