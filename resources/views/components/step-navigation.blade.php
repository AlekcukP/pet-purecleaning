<nav class="steps_nav">
    <ul class="steps_nav_list">

            @if($stepsStatus['one'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Personal info</span>
            </li>
            @endif
            @if($stepsStatus['one'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="/step-one"><span>Personal info</span></a>
            </li>
            @endif

            @if($stepsStatus['two'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Your home</span>
            </li>
            @endif
            @if($stepsStatus['two'] == 'blocked')
            <li class="steps_nav_item steps_nav_blocked">
                <span>Your home</span>
            </li>
            @endif
            @if($stepsStatus['two'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="/step-two"><span>Your home</span></a>
            </li>
            @endif

            @if($stepsStatus['three'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Materials</span>
            </li>
            @endif
            @if($stepsStatus['three'] == 'blocked')
            <li class="steps_nav_item steps_nav_blocked">
                <span>Materials</span>
            </li>
            @endif
            @if($stepsStatus['three'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="/step-three"><span>Materials</span></a>
            </li>
            @endif

            @if($stepsStatus['four'] == 'current')
            <li class="steps_nav_item steps_nav_current">
                <span>Extras</span>
            </li>
            @endif
            @if($stepsStatus['four'] == 'blocked')
            <li class="steps_nav_item steps_nav_blocked">
                <span>Extras</span>
            </li>
            @endif
            @if($stepsStatus['four'] == 'done')
            <li class="steps_nav_item steps_nav_done">
                <a href="/step-four"><span>Extras</span></a>
            </li>
            @endif

    </ul>
</nav>
