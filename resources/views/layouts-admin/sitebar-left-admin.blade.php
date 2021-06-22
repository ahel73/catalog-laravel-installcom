<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/admin">
        <img src="/assets/images/logo.svg" alt="" class="logo_admin_left_bar" data-was-processed="true">
    </a>
    

    <!-- Контейнер для скрола -->
    <div class="sidebar">
        <!-- данные админа -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <i class="font_ava fa fa-user-circle" aria-hidden="true"></i>

            <div class="info">
            {{ auth()->user()->name }}
            </div>
        </div>

        <!-- Меню -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @php
                    $cont = $path['controller'];
                    $act = $path['action'];
                @endphp
                {{-- Добавить товар --}}
                <li class="nav-item">
                    <a 
                        href="#" 
                        class="nav-link 
                        {{ ($cont == 'Product' and $act != 'list') ? 'active' : ''}}"
                     >
                        <i class="fa ic_lvl_1 fa-download" aria-hidden="true"></i>
                        <p>
                            Добавить товар
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul 
                        class="nav nav-treeview"
                        {{ ($cont == 'Product' and $act != 'list') ? 'style= display:block' : ''}}
                     >
                        <li class="nav-item">
                            <a 
                                href="/admin/dobavlenie-tovara/turnikety" 
                                class="nav-link 
                                {{ $act == 'turnikety' ? 'active' : ''}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Турникет</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a 
                                href="/admin/dobavlenie-tovara/shlagbaumy" 
                                class="nav-link 
                                {{ $act == 'shlagbaumy' ? 'active' : ''}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Шлагбаум</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a 
                                href="/admin/dobavlenie-tovara/skud" 
                                class="nav-link 
                                {{ $act == 'skud' ? 'active' : ''}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>СКУД</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a 
                                href="/admin/dobavlenie-tovara/video" 
                                class="nav-link 
                                {{ $act == 'video' ? 'active' : ''}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Видеонаблюдение</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Список товаров --}}
                <li class="nav-item">
                    <a 
                        href="/admin/product/list" 
                        class="nav-link 
                        {{ ($cont == 'Product' and $act == 'list') ? 'active' : ''}}"
                     >
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <p>
                            Список товаров
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>