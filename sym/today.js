    document.getElementById("text").innerHTML = showDay();
  function showDay() {
    var weeks = [ "日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日" ];
    var now = new Date();
    var weekdays = now.getDay();
    return weeks[weekdays];
  }
