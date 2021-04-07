<nav class="steps_nav">
    <ul class="steps_nav_list">

            @if($stepsStatus['personal'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Personal info</span>
            </li>
            @endif
            @if($stepsStatus['personal'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="{{ route('personal') }}"><span>Personal info</span></a>
            </li>
            @endif

            @if($stepsStatus['home'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Your home</span>
            </li>
            @endif
            @if($stepsStatus['home'] == 'blocked')
            <li class="steps_nav_item steps_nav_blocked">
                <span>Your home</span>
            </li>
            @endif
            @if($stepsStatus['home'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="{{ route('home') }}"><span>Your home</span></a>
            </li>
            @endif

            @if($stepsStatus['materials'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Materials</span>
            </li>
            @endif
            @if($stepsStatus['materials'] == 'blocked')
            <li class="steps_nav_item steps_nav_blocked">
                <span>Materials</span>
            </li>
            @endif
            @if($stepsStatus['materials'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="{{ route('materials') }}"><span>Materials</span></a>
            </li>
            @endif

            @if($stepsStatus['extras'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Extras</span>
            </li>
            @endif
            @if($stepsStatus['extras'] == 'blocked')
            <li class="steps_nav_item steps_nav_blocked">
                <span>Extras</span>
            </li>
            @endif
            @if($stepsStatus['extras'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="{{ route('extras') }}"><span>Extras</span></a>
            </li>
            @endif

    </ul>
</nav>
