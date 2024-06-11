@extends('userfront')
<style>
    .clock-date {
        font-size: 20px;
        color: white;
        text-transform: capitalize;
        font-family:inter;
    }
</style>
@section('content')
<div class="text-center mt-4">
    <img src="assets/img/logo.png" height="250px" alt="">
</div>
<div class="text-center">
    <h3 style="font-family: inter; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">CENTRE FOR DEFENCE RESEARCH AND DEVELOPMENT</h3>
</div>
<div class="text-center">
    <h4 style="font-family: inter;color:white;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">MINISTRY OF DEFENCE</h4>
</div>

<div class="text-center mt-3">
    <h1 style="font-family:Verdana, Geneva, Tahoma, sans-serif;color:#CEFFB8;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">PROJECT MANAGEMENT SYSTEM</h1>
</div><br>
<div class="text-center">
    <div class="clock-date" id="clock-date"></div>
</div>
<div class="text-center mt-3">
    <h6 style="font-family:inter;color:white">SELECT THE WING</h6>
</div>
<form action="/projectview" method="get">
    <div class="text-center mt-3">
        <div class="col-2 mx-auto"> <!-- Set the column width to col-3 and center it horizontally -->
            <select class="form-select" aria-label="Default select example" name="wing" style="width: 100%;">
                <option value="Aeronautical Wing" selected>Aeronautical Wing</option>
                <option value="Ammo & Explosive Wing">Ammo & Explosive Wing</option>
                <option value="Armament & Ballistic Wing">Armament & Ballistic Wing</option>
                <option value="Cyber Security Wing">Cyber Security Wing</option>
                <option value="Electrical & Mechanical Wing">Electrical & Mechanical Wing</option>
                <option value="IT & GIS Wing">IT & GIS Wing</option>
                <option value="Marine Wing">Marine Wing</option>
                <option value="Nano and Modern Technology Wing">Nano and Modern Technology Wing</option>
                <option value="Radio & Electronic Wing">Radio & Electronic Wing</option>
                <option value="Sattelite & Surveillance Wing">Sattelite & Surveillance Wing</option>
            </select>
        </div>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning" style="border-radius: 30px;color:black;width:200px">Get Start</button>
    </div>
</form>

<script>
    function getOrdinalSuffix(day) {
            if (day > 3 && day < 21) return 'th';
            switch (day % 10) {
                case 1: return 'st';
                case 2: return 'nd';
                case 3: return 'rd';
                default: return 'th';
            }
        }

        function updateClock() {
            const now = new Date();

            const day = now.getDate();
            const month = now.toLocaleString('default', { month: 'long' });
            const year = now.getFullYear();

            const date = `${day}${getOrdinalSuffix(day)} of ${month} ${year}`;
            const time = now.toLocaleTimeString();

            document.getElementById('clock-date').innerText = date;
            document.getElementById('clock-time').innerText = time;
        }

        setInterval(updateClock, 1000);
        updateClock(); //
</script>
@endsection