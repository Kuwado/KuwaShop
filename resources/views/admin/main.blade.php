<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.parts.head')
</head>

<body>
    <header>
        @include('admin.parts.header')
    </header>

    <section class="admin">
        <div class="fluid-container">
            <div class="row">
                <div class="col-2 admin-right">
                    @include('admin.parts.sidebar')
                </div>

                <div class="col-10 admin-content">
                    <div class="admin-breadcrumb">
                        @include('admin.parts.breadcrumb')
                    </div>
                    <div class="admin-content-detail">
                        @yield('content')
                    </div>
                    <div class="admin-pagination">
                        @yield('pagination')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        @include('admin.parts.footer')
    </footer>
</body>

</html>