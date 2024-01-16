@extends('welcome')
@include('header')
@section('tampilan')
    <section class="wrapper">
        <div class="container">
            <div class="grid-cols-2">
                <div class="grid-item-1">
                    <h1 class="main-heading">
                        Selamat Datang di <span>Uran</span>
                        <br />
                        Develop anything.
                    </h1>
                    <p class="info-text">
                        pembayaran dan pengelolaan data yang efesien dan informasi terpercaya
                        yang ada di uran
                    </p>

                    <div class="btn_wrapper">
                      <a href="{{route('wargas.index')}}">  <button class="btn view_more_btn">
                            Get started <i class="ri-arrow-right-line"></i>
                        </button>
                    </a>
                    </div>
                </div>
                <div class="grid-item-2">
                    <div class="team_img_wrapper">
                        <img src="{{ asset('img/bayar.svg') }}" alt="team-img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- --}}
    <section class="card_t" data-aos="fade-up" data-aos-duration="1000">
        <div class="container_2">
            <div class="card-j">
                <h1>Fitur Aplikasi <span class="card-js">URAN</span></h1>
            </div>
             <div class="containner3">
                {{-- batas --}}
                <div class="card">
                <div class="icon_c">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.0049 2L18.3032 4.28071C18.7206 4.41117 19.0049 4.79781 19.0049 5.23519V7H21.0049C21.5572 7 22.0049 7.44772 22.0049 8V16C22.0049 16.5523 21.5572 17 21.0049 17L17.7848 17.0011C17.3982 17.5108 16.9276 17.9618 16.3849 18.3318L11.0049 22L5.62486 18.3318C3.98563 17.2141 3.00488 15.3584 3.00488 13.3744V5.23519C3.00488 4.79781 3.28913 4.41117 3.70661 4.28071L11.0049 2ZM11.0049 4.094L5.00488 5.97V13.3744C5.00488 14.6193 5.58406 15.7884 6.56329 16.5428L6.75154 16.6793L11.0049 19.579L14.7869 17H10.0049C9.4526 17 9.00488 16.5523 9.00488 16V8C9.00488 7.44772 9.4526 7 10.0049 7H17.0049V5.97L11.0049 4.094ZM11.0049 12V15H20.0049V12H11.0049ZM11.0049 10H20.0049V9H11.0049V10Z" fill="currentColor"></path></svg>
                </div>
                <div class="card-info">
                    <h2 class="card-judul">Traansaksi</h2>
                    <p><small>kemudahan transaksi saat iuran</small></p>
                    <div class="card-content">
                        <h4>kami membuat URAN untuk bermaksut mempermudah dalam 
                            pengelolaan data dan transaksi aat melakukan iuran.
                        </h4>
                    </div>
                </div>
              </div>

              <div class="card">
                <div class="icon_c">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 5C13.567 5 12 6.567 12 8.5C12 10.433 13.567 12 15.5 12C17.433 12 19 10.433 19 8.5C19 6.567 17.433 5 15.5 5ZM10 8.5C10 5.46243 12.4624 3 15.5 3C18.5376 3 21 5.46243 21 8.5C21 9.6575 20.6424 10.7315 20.0317 11.6175L22.7071 14.2929L21.2929 15.7071L18.6175 13.0317C17.7315 13.6424 16.6575 14 15.5 14C12.4624 14 10 11.5376 10 8.5ZM3 4H8V6H3V4ZM3 11H8V13H3V11ZM21 18V20H3V18H21Z" fill="currentColor"></path></svg>
                </div>
                <div class="card-info">
                    <h2 class="card-judul">search</h2>
                    <p><small>fitur pencarian</small></p>
                    <div class="card-content">
                        <h4>fitur ini membantu untuk mencari data yang semisal nya dalam
                            sehari banyak data yang masuk
                        </h4>
                    </div>
                </div>
              </div>

              
              <div class="card">
                <div class="icon_c">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM19 20V4H5V20H19ZM7 6H11V10H7V6ZM7 12H17V14H7V12ZM7 16H17V18H7V16ZM13 7H17V9H13V7Z" fill="currentColor"></path></svg>
                </div>
                <div class="card-info">
                    <h2 class="card-judul">Cetak</h2>
                    <p><small>Fitur untuk mencetak data</small></p>
                    <div class="card-content">
                        <h4>fitur ini tersedia untuk memudah kan pengguna untuk mencetak data kedalam excel
                            dan pdf untuk membuat sebuah laporan. dan mencentak transaksi.
                        </h4>
                    </div>
                </div>
              </div>

              
              <div class="card">
                <div class="icon_c">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z" fill="currentColor"></path></svg>                </div>
                <div class="card-info">
                    <h2 class="card-judul">Multi Login</h2>
                    <p><small>fitur untuk membedakan pengguna </small></p>
                    <div class="card-content">
                        <h4>fitur ini kami buat agar tidak terjadi penyalagunaan yang 
                            dilakukan oleh opnum yang tidah bertanggung jawab.dan untuk keamanan data.
                        </h4>
                    </div>
                </div>
              </div>

              <div class="card">
                <div class="icon_c">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11 7H13V17H11V7ZM15 11H17V17H15V11ZM7 13H9V17H7V13ZM15 4H5V20H19V8H15V4ZM3 2.9918C3 2.44405 3.44749 2 3.9985 2H16L20.9997 7L21 20.9925C21 21.5489 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918Z" fill="currentColor"></path></svg>
                </div>
                <div class="card-info">
                    <h2 class="card-judul">laporan</h2>
                    <p><small>fitur unntuk melakukan laporan</small></p>
                    <div class="card-content">
                        <h4>fitur ini kami sediakan untuk warga jika ada masalah di sekitar kita.
                            dan agar rt atau rw lebih cepat menangani laporan tersebut.
                        </h4>
                    </div>
                </div>
              </div>


              <div class="card">
                <div class="icon_c">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 20H2V18H3V11.0314C3 6.04348 7.02944 2 12 2C16.9706 2 21 6.04348 21 11.0314V18H22V20ZM5 18H19V11.0314C19 7.14806 15.866 4 12 4C8.13401 4 5 7.14806 5 11.0314V18ZM9.5 21H14.5C14.5 22.3807 13.3807 23.5 12 23.5C10.6193 23.5 9.5 22.3807 9.5 21Z" fill="currentColor"></path></svg>
                </div>
                <div class="card-info">
                    <h2 class="card-judul">Notifikasi</h2>
                    <p><small>fitur notifikasi</small></p>
                    <div class="card-content">
                        <h4>fitur ini kami sediakan agar rt dan rw dapat lebih cepat memberi informasi
                            kepada warga. bisa tertentu dan seluruh warga.semisal ada kegiatan atau yang lain nya.
                        </h4>
                    </div>
                </div>
              </div>
            </div>

        </div>
        <button id="scrollToTopBtn" title="Go to top">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>
    </section>
        @include('faq')
        @include('footer')
@endsection
