{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Kunst
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('art.index')}}">All kunst</a></li>
                    <li><a href="{{route('art.create')}}">Legg til kunst</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Innlegg
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('post.index')}}">Alle innlegg</a></li>
                    <li><a href="{{route('post.create')}}">Legg til nytt innlegg</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->
