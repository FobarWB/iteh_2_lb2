<!DOCTYPE HTML>
<html>

<head>
    <title>Lab2</title>
    <script>
        function get_carrier(){
        let key = document.getElementById("carrier").value;
        let value = localStorage.getItem(key);
        document.getElementById("localStorage").innerHTML = value;
        }
        function get_actor(){
            let key = document.getElementById("actor").value;
            let value = localStorage.getItem(key);
            document.getElementById("localStorage").innerHTML = value;
        }
        function get_date(){
            let key = document.getElementById("date").value;
            let value = localStorage.getItem(key);
            document.getElementById("localStorage").innerHTML = value;
        }
    </script>
</head>

<body>
    <form method="GET" action="carrier.php">
    <p>Films by carrier <select name="carrier" id="carrier" onchange="get_carrier()">
            <?php
            include 'conn.php';
            $carrier = $db->distinct("carrier");

            foreach ($carrier as $document) {
                echo "<option>$document</option>";
            }
            ?>
        </select>
        <button> ОК </button></p>
    </form>

    <form method="GET" action="actor.php">
        <p>Films by actor <select name="actor" id="actor" onchange="get_actor()">
        <?php
            include 'conn.php';
            $actor = $db->distinct("actor");

            foreach ($actor as $document) {
                echo "<option>$document</option>";
            }
            ?>
        </select>
        <button> ОК </button></p>
    </form>

    <form method="GET" action="date.php">
        <p>Films by date <select name="date" id="date" onchange="get_date()">
        <?php
            include 'conn.php';
            $carrier = $db->distinct("date");
            foreach ($carrier as $document) {
                echo "<option>$document</option>";
            }
            ?>
        </select>
        <button> ОК </button> </p>
    </form>
<p><b>localStorage</p>
<div id="localStorage"></div>
</body>

</html>