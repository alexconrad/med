


<div class="container">
    <div class="row">
        <div class="col-sm">
            Timezone
        </div>
        <div class="col-sm">
            Current Date
        </div>
        <div class="col-sm">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">S</a></li>
                    <li class="page-item"><a class="page-link" href="#">&lt;</a></li>
                    <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm">
            Mon
        </div>
        <div class="col-sm">
            Tue
        </div>
        <div class="col-sm">
            Wed
        </div>
        <div class="col-sm">
            Thu
        </div>
        <div class="col-sm">
            Fri
        </div>
        <div class="col-sm">
            Sat
        </div>
        <div class="col-sm">
            Sun
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            01
        </div>
        <div class="col-sm">
            02
        </div>
        <div class="col-sm">
            03
        </div>
        <div class="col-sm">
            04
        </div>
        <div class="col-sm">
            05
        </div>
        <div class="col-sm">
            06
        </div>
        <div class="col-sm">
            07
        </div>
    </div>

    <div class="row">
        <?php
        $start = '04:00';
        $times = array((new DateTime('2010-01-01 '.$start.':00'))->format('h:i A'));
        $current = $start;
        for ($i=1; $i<=19; $i++) {

            $dt = new DateTime('2010-01-01 '.$current.':00');
            $dt->add(new DateInterval('PT1H'));
            $current = $dt->format('H:i');
            $times[] = (new DateTime('2010-01-01 '.$current.':00'))->format('h:i A');
        }

        foreach (range(1,7) as $nr) { ?>
            <div class="col-sm">
                <div class="btn-group-vertical">
                    <?php foreach ($times as $time) { ?>
                        <button type="button" class="btn btn-outline-info"><?php echo $time; ?></button>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

    </div>

</div>
