<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

{{-- <style>
       body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
        }

        .containerwidth {
            width: 100%;
        }

        .wrapper_12 {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 15px 25px rgba(0, 0, 50, 0.2);
        }

        .toggle {
            width: calc(100% - 20px);
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 16px;
            color: #111130;
            font-weight: 600;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px 0;
        }

        .content_3 {
            position: relative;
            font-size: 14px;
            text-align: justify;
            line-height: 30px;
            height: 0;
            overflow: hidden;
            transition: all 1s;
        }
    .containerwidth {
            width: 100%;
        }
        
        .wrapper_12 {
            background-color: #ffffff;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            -webkit-box-shadow: 0 15px 25px rgba(0, 0, 50, 0.2);
            box-shadow: 0 15px 25px rgba(0, 0, 50, 0.2);
        }
        
        .toggle,
        .content_3 {
            font-family: "Poppins", sans-serif;
        }
        .icon{
            margin-left: auto;
            float: right;
            color: #6b85d8;
        }
        
        .toggle {
            width: 100%;
            background-color: transparent;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            font-size: 16px;
            color: #6b85d8;
            font-weight: 600;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px 0;
        }
        .content_3 {
            position: relative;
            font-size: 14px;
            text-align: justify;
            line-height: 30px;
            height: 0;
            overflow: hidden;
            -webkit-transition: all 1s;
            -o-transition: all 1s;
            transition: all 1s;
        }
</style> --}}

<style>
    /* Style for FAQ section */
.boxaccordion {
    width: 100%;
    height: 90%;
}

.containerwidth {
    max-width: 1200px;
    margin: 0 auto;
}

.wrapper_12 {
    margin-bottom: 20px;
}

.toggle {
    background-color: #ffffff;
    color: #3c9fef;
    padding: 10px;
    cursor: pointer;
    border: none;
    text-align: left;
    width: 100%;
    display: flex;
    justify-content: space-between;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 4px 8px rgba(0, 0, 0, 0.1); 
    align-items: center;
    border-radius: 5    px;
}

.toggle:hover {
    box-shadow: 0 4px 8px rgba(63, 166, 251, 0.2), 0 8px 16px rgba(67, 166, 228, 0.2); 
}
.judul{
    text-align: center;
    margin-top: 50px;
    margin-bottom: 50px;
    color: #6b85d8;
}
.icon {
    font-size: 20px;
    float:  right;
    text-align: right;
}


.content_3 {
    overflow: hidden;
    transition: height 0.3s ease-in-out;
    height: 0;
}

.content_3 p {
    color: #555;
    margin: 10px 0;
}

/* Responsive Styling */
@media screen and (max-width: 768px) {
    .toggle {
        font-size: 14px;
    }
}

/* AOS Animation */
[data-aos] {
    transition-duration: 1s;
}

[data-aos="fade-up"] {
    opacity: 0;
    transform: translateY(30px);
}

[data-aos="fade-up"].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

</style>
<div class="faq">
<div class="boxaccordion">
    <div class="judul">
        <h1>
            Cara menggunnakan aplikasi
        </h1>
    </div>
    <div class="containerwidth">
        <div class="wrapper_12">
            <button class="toggle">Bagai mana cara menggunakan aplikasi URAN?<i class="fas fa-plus icon"></i></button>
            <div class="content_3">
                <p>anda harus melakukan registrasi terlebih dahulu untu menggunakan aplikasi ini.</p>
            </div>
        </div>
        <div class="wrapper_12">
            <button class="toggle">apa ke unggulan URAN nya dari grub wa?<i class="fas fa-plus icon"></i></button>
            <div class="content_3">
                <p>lebih unggul karena memudah kan pengguna untuk mengelola banyak data yang masuk.</p>
            </div>
        </div>
        <div class="wrapper_12">
            <button class="toggle">bagai  mna kak kalau semisal nya uang  mya itu lebih apakah aada fitur kembalian ?<i class="fas fa-plus icon"></i></button>
            <div class="content_3">
                <p>kami akan kembangkan untuk membuat fitur menghitung jumlah kembalian</p>
            </div>
        </div>
        <div class="wrapper_12">
            <button class="toggle">untuk laporan nya itu bagaimana kak yang menerima itu  rt apa rw?<i class="fas fa-plus icon"></i></button>
            <div class="content_3">
                <p>untuk yang menerima itu ialah rt karena rt yang ber tanggung jawab untuk keaamana dan kenyamanan warga
                    jadi rw hanya menerima laporan dari rt jika memang  urjen dan memang perlu penanganan rw.
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<script>
  let toggles = document.getElementsByClassName("toggle");
  let contentDiv = document.getElementsByClassName("content_3");
  let icons = document.getElementsByClassName("icon");

  for (let i = 0; i < toggles.length; i++) {
      toggles[i].addEventListener("click", () => {
          if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
              contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
              toggles[i].style.color = "#0084e9";
              icons[i].classList.remove("fa-plus");
              icons[i].classList.add("fa-minus");
          } else {
              contentDiv[i].style.height = "0px";
              toggles[i].style.color = "#111130";
              icons[i].classList.remove("fa-minus");
              icons[i].classList.add("fa-plus");
          }

          for (let j = 0; j < contentDiv.length; j++) {
              if (j !== i) {
                  contentDiv[j].style.height = 0;
                  toggles[j].style.color = "#111130";
                  icons[j].classList.remove("fa-minus");
                  icons[j].classList.add("fa-plus");
              }
          }
      });
  }
</script>