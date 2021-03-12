

<div class="container">
    <div class="row">
        <div class="col-md-3">

            <div class="footer__projects is-hidden-mobile is-hidden-tablet-only">
            <div class="container">
                <div class="columns center-flex-v">

                <ul class="nav nav-list nav-menu-list-style">
                        <li><label class="tree-toggle nav-header glyphicon-icon-rpad">
                            <ul class="nav nav-list tree bullets">
                                <li> @include('layouts.top_menu', ['categories' => $categories])</li>

                            </ul>
                            </label>
                        </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">

            <div class="footer__projects is-hidden-mobile is-hidden-tablet-only">
                <div class="container">
                    <div class="columns center-flex-v">

                        <ul class="nav nav-list nav-menu-list-style">
                            <li><label class="tree-toggle nav-header glyphicon-icon-rpad">
                                    <ul class="nav nav-list tree bullets">
@foreach ($footers as $footer)
    <div align="right"><th>About Us </th><td>{!! $footer->aboutUs !!}</td>
        <br>
        <div class="bottom-line-content">
            <div class="container ">
                <div class="copyright-text ">
                    <td>{{ $footer->copyright}}</td>
                </div>
            </div>
        </div>
@endforeach
    </div>
                                    </ul></label></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
