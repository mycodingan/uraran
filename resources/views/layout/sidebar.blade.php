			<div class="sidebar-content  bg-primary">

				<div class="card card-body bg-primary-400" >
					<a href="http://kopyov.ticksy.com" class="btn bg-primary-700 btn-block" target="_blank"><i
							class="icon-lifebuoy mr-2"></i>URAN</a>
				</div>
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs caret-slate-400">Warga</div> <i
								class="icon-menu"></i>
						</li>
						<li class="nav-item"><a href="{{route('wargas.index')}}" class="nav-link">Data Warga</a></li>
						<li class="nav-item"><a href="{{route('wargas.create')}}" class="nav-link">add warga</a></li>
						<li class="nav-item"><a href="{{route('keluahans.index')}}" class="nav-link">keluhan warga</a></li>
						<li class="nav-item"><a href="{{route('keluahans.create')}}" class="nav-link">Lapor</a></li>

						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">informasi</div> <i
								class="icon-menu"></i>
						</li>
						<li class="nav-item"><a href="base_scss_css.html" class="nav-link">add informasi</a></li>
						<li class="nav-item"><a href="base_scss_compile.html" class="nav-link">informasi</a></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">Berita</a>
							<ul class="nav nav-group-sub" data-submenu-title="Plugins">
								<li class="nav-item"><a href="plugins_forms.html" class="nav-link"> berita Terkini</a>
								</li>
							</ul>
						</li>
                        <li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Lapor</div> <i
								class="icon-menu"></i>
						</li>
						<li class="nav-item"><a href="{{route('keluahans.create')}}" class="nav-link">Tambah laporan</a></li>
						<li class="nav-item"><a href="{{route('keluahans.index')}}" class="nav-link">Lihat laporan</a></li>
					</ul>
				</div>
			</div>
		</div>