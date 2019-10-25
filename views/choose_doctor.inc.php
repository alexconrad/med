
<div class="jumbotron">
    <h1 class="display-4">Hello !</h1>
    <p class="lead">Choose a doctor</p>
    <hr class="my-4">
    <p>Click a button and choose.</p>


    <div class="btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Choose a doctor
        </button>

        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo Common::link('SelectDate','index', array('doctor_id'=>1)); ?>">Alessandro Littara</a>
            <a class="dropdown-item" href="<?php echo Common::link('SelectDate','index', array('doctor_id'=>2)); ?>">Miguel Angel Guevara</a>
            <!--            <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
            -->        </div>
    </div>
</div>
