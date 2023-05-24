<script>
    //  var end = new Date('05/19/2023 10:1 AM');


    var end = new Date("<?= $args['end'] ?>");

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('d').innerHTML = days ;
        document.getElementById('h').innerHTML = hours ;
        document.getElementById('m').innerHTML = minutes  ;
        document.getElementById('s').innerHTML = seconds  ;
    }

    timer = setInterval(showRemaining, 1000);

</script>
