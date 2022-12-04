<?php
?>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4><?php
                echo $_SESSION['uname'];
                ?></h4>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>

        <div class="col-sm-9">
            <h4><small>RECENT POSTS</small></h4>
            <hr>
            <h2>NAGŁOWNEK (NAZWA STRONY)</h2>
            <p>TREŚć</p>
            <br><br>
        </div>
    </div>
</div>