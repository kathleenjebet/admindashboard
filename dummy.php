<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn =mysqli_connect($server,$username,$password,$database);

$sqlquery=mysqli_query($conn,"SELECT * FROM enrollment ");
//$fetchrecords=mysqli_fetch_array($sqlquery);
//echo $fetchrecords['firstname'].'  '.$fetchrecords['message'];


while ($fetchrecords=mysqli_fetch_array($sqlquery)) {
    # code...
    echo $fetchrecords['firstname'].'  '.$fetchrecords['message'] ."<br>";
}
?><div class="modal fade" id="addUserForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria hidden="true">x</span>
            </button>

        </div>
        <div class="modal-body">
            <h3>Modal Body</h3>


        </div>
        <div class="modal-footer">


        </div>
    </div>
</div>
</div>
