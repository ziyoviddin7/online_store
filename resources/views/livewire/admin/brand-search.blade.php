<div>

    <!-- /header-dashboard -->
    <!-- main-content -->
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Brands</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">

                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                <div class="text-tiny">Brands</div>
                            </a>
                        </li>
                        <li>
                    </ul>
                </div>
                <!-- all-attribute -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">

                        <div class="wg-filter flex-grow">

                            <form class="form-search">
                                <fieldset class="name">
                                    <input type="text" placeholder="Search here..." class="" name="name"
                                        wire:model.live="search" tabindex="2" value="" aria-required="true"
                                        required="">
                                </fieldset>
                                <div class="button-submit">
                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="{{ route('admin.brand.create') }}"><i
                                class="icon-plus"></i>Add new</a>
                    </div>
                    @if (session('error'))
                        <div style="color: red; font-size: 20px; margin-left: 10px;">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="wg-table table-all-attribute">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Brands</div>
                            </li>
                            <li>
                                <div class="body-title">Products Count</div>
                            </li>

                            <li>
                                <div class="body-title">Action</div>
                            </li>
                        </ul>
                        @foreach ($brands as $brand)
                            <ul class="flex flex-column">
                                <li class="attribute-item flex items-center justify-between gap20">
                                    <div class="name">
                                        <a href="{{ route('admin.brand.show', $brand->id) }}"
                                            class="body-title-2">{{ $brand->name }}</a>
                                    </div>
                                    <div class="body-text">{{ $brand->products()->count() }}</div>

                                    <div class="list-icon-function">

                                        <div class="">
                                            <form action="{{ route('admin.brand.destroy', $brand->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="icon-trash-2"></button>
                                            </form>

                                        </div>


                                    </div>

                                </li>

                            </ul>
                        @endforeach

                    </div>

                </div>
                <br>
                <br>
                <br>
                {{ $brands->links('livewire::bootstrap') }}

                <!-- /all-attribute -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
        <!-- bottom-page -->
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 Remos. Design with</div>
            <i class="icon-heart"></i>
            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All
                rights reserved.</div>
        </div>
        <!-- /bottom-page -->
    </div>
    <!-- /main-content -->
</div>
