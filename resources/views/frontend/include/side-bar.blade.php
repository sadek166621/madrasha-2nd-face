<style>
    .calendar .current-day {
            background-color: #f92a50;
        }
</style>
<div class="col-md-3">
    <div class="content-right">
        <div id="text-2" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">
            {{ $setting->message_from_1 }}</h3></div>			<div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-3521" src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->principal_image }}" alt="" width="225" height="224" srcset="{{ asset('assets') }}/images/uploads/settings/{{ $setting->principal_image }}" sizes="(max-width: 225px) 100vw, 225px" /></p>
<p><a class="" href="{{ route('principalMessage') }}">View Details →</a></p>
</div>
</div>

<div id="nav_menu-2" class="sidebar-widget widget widget_nav_menu">
<div class="widget-heading"><h3 class="widget-title">Important Links</h3></div><div class="menu-important-links-container"><ul id="menu-important-links" class="menu"><li id="menu-item-3513" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3513"><a href="https://www.hadithbd.com/">www.hadithbd.com</a></li>
<li id="menu-item-3514" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3514"><a href="https://www.alim.org/">www.alim.org</a></li>
<li id="menu-item-3515" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3515"><a href="https://tawheedpublicationsbd.com/">tawheedpublicationsbd</a></li>
<li id="menu-item-3516" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3516"><a href="https://aljamiatussalafiah.org/">aljamiatussalafiah.org</a></li>
<li id="menu-item-3517" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3517"><a href="https://binbaz.org.sa/">binbaz.org.sa</a></li>
<li id="menu-item-3518" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3518"><a href="https://www.alfawzan.af.org.sa">alfawzan.af.org.sa</a></li>
<li id="menu-item-3519" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3519"><a href="https://thealbaani.site">thealbaani.site</a></li>
<li id="menu-item-3520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3520"><a href="http://www.uthaymeen.com/">uthaymeen.com</a></li>
<li id="menu-item-3520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3520"><a href="https://islamqa.info">islamqa.info</a></li>
<li id="menu-item-3520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3520"><a href="https://kalamullah.com/">kalamullah.com</a></li>
<li id="menu-item-3520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3520"><a href="https://assunnahtrust.org/">assunnahtrust.org</a></li>
<li id="menu-item-3520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3520"><a href="https://assunnahfoundation.org/">assunnahfoundation.org</a></li>
<li id="menu-item-3520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3520"><a href="https://gtaf.org/">gtaf.org</a></li>
</ul></div></div>
<div id="nav_menu-4" class="sidebar-widget widget widget_nav_menu"><div class="widget-heading"><h3 class="widget-title">Sidebar Menu</h3></div><div class="menu-sidebar-menu-container"><ul id="menu-sidebar-menu" class="menu"><li id="menu-item-3496" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3496"><a target="_blank" rel="noopener" href="#">Student Log in</a></li>
<li id="menu-item-3497" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3497"><a target="_blank" rel="noopener" href="#">Teacher Log in</a></li>
<li id="menu-item-3498" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3498"><a target="_blank" rel="noopener" href="#">e-Payment</a></li>
<li id="menu-item-3499" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3499"><a target="_blank" rel="noopener" href="#">e-Library</a></li>
</ul></div></div>
<div id="calendar-2" class="sidebar-widget widget widget_calendar">
    <div class="widget-heading">
        <h3 class="widget-title">Calendar</h3>
    </div>
        <div id="calendar_wrap" class="calendar_wrap">
<table id="wp-calendar" class="wp-calendar-table calendar">
    <?php
    $mnth = date(" F Y ");

 echo "<caption>$mnth</caption>"
?>

<thead>
<tr>
<th scope="col" title="Monday">M</th>
<th scope="col" title="Tuesday">T</th>
<th scope="col" title="Wednesday">W</th>
<th scope="col" title="Thursday">T</th>
<th scope="col" title="Friday">F</th>
<th scope="col" title="Saturday">S</th>
<th scope="col" title="Sunday">S</th>
</tr>
</thead>
<tbody>
    <?php
    $timestamp = mktime(0, 0, 0, date("n"), 1, date("Y"));
    $dayOfWeek = date("w", $timestamp);
    $blankDays = $dayOfWeek - 1;

    for ($i = 1; $i <= $blankDays; $i++) {
        echo "<td>&nbsp;</td>";
    }

    for ($dayOfMonth = 1; $dayOfMonth <= date("t", $timestamp); $dayOfMonth++) {
        if ($dayOfMonth == date("j")) {
            echo "<td class='current-day'>$dayOfMonth</td>";
        } else {
            echo "<td>$dayOfMonth</td>";
        }

        if (($dayOfWeek % 7 == 0) || ($dayOfMonth == date("t", $timestamp))) {
            echo "</tr>";
            if ($dayOfMonth != date("t", $timestamp)) {
                echo "<tr>";
            }
        }
        $dayOfWeek++;
    }
    ?>
</tbody>
</table><nav aria-label="Previous and next months" class="wp-calendar-nav">
{{-- <span class="wp-calendar-nav-prev"><a href="https://ngdc.ac.bd/2023/02/">&laquo; Feb</a></span> --}}
<span class="pad">&nbsp;</span>
<span class="wp-calendar-nav-next">&nbsp;</span>
</nav>
</div>
</div>
</div>
</div>
