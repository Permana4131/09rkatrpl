@extends('master') 
 
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .corosel{
            height:70vh;
        }
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        }

        .content-width {
        width: 90%;
        height: 100vh;
        margin: 0 auto;
        }

        .slideshow {
        position: relative;
        width: 100%;
        height: 50vh;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        }

        .slideshow-items {
        position: relative;
        width: 100%;
        height: 300px;
        }

        .item {
        position: absolute;
        width: 100%;
        height: auto;
        }

        .item-image-container {
        position: relative;
        width: 25%;
        }

        .item-image-container::before {
        content: '';
        position: absolute;
        top: -1px;
        left: 0;
        width: 92%;
        height: 101%;
        background: #22222A;
        opacity: 0;
        }

        .item-image {
        position: relative;
        width: 92%;
        height: 100%;
        opacity: 0;
        display: block;
        transition: opacity .3s ease-out .45s;
        }

        .item.active .item-image {
        opacity: 1;
        }

        .item.active .item-image-container::before {
        opacity: .8;
        }

        .item-description {
        position: absolute;
        top: 182px;
        right: 0;
        width: 50%;
        padding-right: 4%;
        line-height: 1.8;
        }
        .item-header {
        position: absolute;
        top: 150px;
        left:1%;
        z-index: 100;
        }

        .item-header .vertical-part {
        margin: 0 -4px;
        font-family: 'Montserrat', sans-serif;
        -webkit-font-smoothing: auto;
        font-size: 7vw;
        color: #fff;
        }

        .vertical-part {
        overflow: hidden;
        display: inline-block;
        }

        .vertical-part b {
        display: inline-block;
        transform: translateY(100%);
        }

        .item-header .vertical-part b {
        transition: .5s;
        }

        .item-description .vertical-part b {
        transition: .21s;
        }

        .item.active .item-header .vertical-part b {
        transform: translateY(0);
        }

        .item.active .item-description .vertical-part b {
        transform: translateY(0);
        }

        /* Controls ----------------------------------------------------------------------*/
        .controls {
        position: relative;
        text-align: right;
        z-index: 1000;
        }

        .controls ul {
        list-style: none;
        }

        .controls ul li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 3px;
        background:#bdbdd5;;
        cursor: pointer;
        }

        .controls ul li.active {
        background:#6a6a77;;
        }
    </style>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

<div class="col-md-12 corosel" style="background:#D4E6F1 ;width:100%;">
<div class="content-width">
<div class="slideshow">
<!-- Slideshow Items -->
<div class="slideshow-items">
  <div class="item">
    <div class="item-image-container">
      <img class="item-image" src="../image/_MG_9926-y.jpg" />
    </div>
    <!-- Staggered Header Elements -->
    <div class="item-header">
      <span class="vertical-part"><b>I</b></span>
      <span class="vertical-part"><b>T</b></span>
      <span class="vertical-part"><b>D</b></span>
      <span class="vertical-part"><b>E</b></span>
      <span class="vertical-part"><b>L</b></span>
    </div>
    <!-- Staggered Description Elements -->
    <div class="item-description">
      <span class="vertical-part">
        <b>Kampus</b>
      </span>
      <span class="vertical-part">
        <b>yang</b>
      </span> 
      <span class="vertical-part">
        <b>mempunyai</b>
      </span>
      <span class="vertical-part">
        <b>kemampuan</b>
      </span> 
      <span class="vertical-part">
        <b>dibidang</b>
      </span>
      <span class="vertical-part">
        <b>teknologi</b>
      </span> 
      <span class="vertical-part">
        <b>dan</b>
      </span>
      <span class="vertical-part">
        <b>diharapkan</b>
      </span> 
      <span class="vertical-part">
        <b>mahasiswa</b>
      </span>
      <span class="vertical-part">
        <b>keluaran</b>
      </span> 
      <span class="vertical-part">
        <b>kampus</b>
      </span>
      <span class="vertical-part">
        <b>tersebut</b>
      </span> 
      <span class="vertical-part">
        <b>dapat</b>
      </span>
      <span class="vertical-part">
        <b>bermanfaat</b>
      </span> 
      <span class="vertical-part">
        <b>bagi</b>
      </span>
      <span class="vertical-part">
        <b>banyak</b>
      </span> 
      <span class="vertical-part">
        <b>pihak</b>
      </span>
      <span class="vertical-part">
        <b>dan</b>
      </span> 
      <span class="vertical-part">
        <b>tentunya</b>
      </span>
      <span class="vertical-part">
        <b>berguna</b>
      </span> 
      <span class="vertical-part">
        <b>bagi</b>
      </span> 
      <span class="vertical-part">
        <b>dunia</b>
      </span>
      <span class="vertical-part">
        <b>saat</b>
      </span> 
      <span class="vertical-part">
        <b>ini.</b>
      </span>
      <span class="vertical-part">
        <b>Salam</b>
      </span> 
      <span class="vertical-part">
        <b>IT</b>
      </span>
      <span class="vertical-part">
        <b>salam</b>
      </span> 
      <span class="vertical-part">
        <b>pertolongan</b>
    </span>
    </div>
  </div>
  <div class="item">
    <div class="item-image-container">
      <img class="item-image" src="../image/1760_IT-DEL--Kampus-Teknologi-yang-Berbudaya.jpg" style="height: 100%;"/>
    </div>
    <div class="item-header">
      <span class="vertical-part"><b>T</b></span>
      <span class="vertical-part"><b>R</b></span>
      <span class="vertical-part"><b>P</b></span>
      <span class="vertical-part"><b>L</b></span>

    </div>
    <div class="item-description" style="text-align:center;">
        
      <span class="vertical-part">
        <b style="font-size:200%;">Visi</b>
      </span>
      <br>
      <span class="vertical-part">
        <b>Menjadikan Program Studi</b>
      </span>
      <span class="vertical-part">
        <b>Teknologi Rekayasa Perangkat</b>
      </span>
      <span class="vertical-part">
        <b>Lunak Program Sarjana</b>
      </span>
      <span class="vertical-part">
        <b>Terapan sebagai batu</b>
      </span>
      <span class="vertical-part">
        <b>loncatan menuju masa</b>
      </span>
      <span class="vertical-part">
        <b>depan Teknologi Informasi </b>
      </span>
      <span class="vertical-part">
        <b>yang mengintegrasikan dunia</b>
      </span>
      <span class="vertical-part">
          <b>pendidikan dengan kebutuhan</b>
      </span>
      <span class="vertical-part">
          <b>usaha akan tenaga profesional</b>
      </span>
      <span class="vertical-part">
          <b>informatika yang mampu bersaing secara global.</b>
      </span>
      
    </div>
  </div>
  <div class="item">
    <div class="item-image-container">
      <img class="item-image" src="https://i2.wp.com/www.futuristarchitecture.com/wp-content/uploads/2016/11/fantastic-small-living-room-interior-idea-7.jpg?w=700&ssl=1" />
    </div>
    <div class="item-header">
      <span class="vertical-part"><b>T</b></span>
      <span class="vertical-part"><b>R</b></span>
      <span class="vertical-part"><b>P</b></span>
      <span class="vertical-part"><b>L</b></span>
    </div>
    <div class="item-description">
      <span class="vertical-part">
        <b>Teknologi</b>
      </span>
      <span class="vertical-part">
        <b>Rekayasa</b>
      </span>
      <span class="vertical-part">
        <b>Perangkat</b>
      </span>
      <span class="vertical-part">
        <b>Lunak</b>
      </span>
      <span class="vertical-part">
        <b>adalah</b>
      </span>
      <span class="vertical-part">
        <b>program</b>
      </span>
      <span class="vertical-part">
        <b>yang</b>
      </span>
      <span class="vertical-part">
        <b>termasuk</b>
      </span>
      <span class="vertical-part">
        <b>Juga</b>
      </span>
      <span class="vertical-part">
        <b>Kedalam</b>
      </span>
      <span class="vertical-part">
        <b>Fakultas</b>
      </span>
      <span class="vertical-part">
        <b>Teknik</b>
      </span>
      <span class="vertical-part">
        <b>Informatika</b>
      </span>
      <span class="vertical-part">
        <b>yang</b>
      </span>
      <span class="vertical-part">
        <b>Ada</b>
      </span>
      <span class="vertical-part">
        <b>Di</b>
      </span>
      <span class="vertical-part">
        <b>Institut</b>
      </span>
      <span class="vertical-part">
        <b>Tknologi</b>
      </span>
      <span class="vertical-part">
        <b>Del</b>
      </span>
      
    </div>
  </div>
</div>
<div class="controls">
  <ul style="margin-top:10%;">
    <li class="control" data-index="0"></li>
    <li class="control" data-index="1"></li>
    <li class="control" data-index="2"></li>
  </ul>
</div>
</div>
</div>

</div>
   

   <br>
   <div class="col-md-12" style="padding:1%;"></div>
   <div class="container">
       <div class="row">
           <div class="col">
               <center>
                   <img width="80%" src="../image/icpc.png" class="rounded-circle">
                   <h3>Laporan Mingguan</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat exercitationem, unde aliquid
                       beatae
                       molestias reiciendis maxime laudantium dolorem ratione atque quibusdam, odio quisquam molestiae
                       voluptas ipsa. Ut adipisci laborum consequuntur.</p>
                   <a class="btn btn-primary" href="#">Selengkapnya</a>
               </center>
           </div>

           <div class="col">
               <center>
                   <img width="80%" src="../image/ctff.png" class="rounded-circle">
                   <h3>Laporan Bulanan</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat exercitationem, unde aliquid
                       beatae
                       molestias reiciendis maxime laudantium dolorem ratione atque quibusdam, odio quisquam molestiae
                       voluptas ipsa. Ut adipisci laborum consequuntur.</p>
                   <a class="btn btn-primary" href="#">Selengkapnya</a>
               </center>
           </div>

           <div class="col">
               <center>
                   <img width="80%" src="../image/icpc.png" class="rounded-circle">
                   <h3>Laporan Tahunan</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat exercitationem, unde aliquid
                       beatae
                       molestias reiciendis maxime laudantium dolorem ratione atque quibusdam, odio quisquam molestiae
                       voluptas ipsa. Ut adipisci laborum consequuntur.</p>
                   <a class="btn btn-primary" href="#">Selengkapnya</a>
               </center>
           </div>

       </div>
       <br><br><br>

       <div class="row">
           <div class="col-md-7" style="padding: 80px;">
               <h2>Dosen</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, perspiciatis. Mollitia veniam,
                   tenetur quisquam eveniet dolor tempore alias maxime praesentium soluta repellendus? Est distinctio
                   quos quam fugit, repudiandae doloribus nesciunt.</p>
           </div>
           <div class="col-md-5">
               <img class="img-thumbnail" src="../image/ctff.png">
           </div>
       </div>

       <hr>

       <div class="row">
           <div class="col-md-5">
               <img class="img-thumbnail" src="../image/icpc.png">
           </div>
           <div class="col-md-7" style="padding: 80px;">
               <h2>Mahasiswa</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, perspiciatis. Mollitia veniam,
                   tenetur quisquam eveniet dolor tempore alias maxime praesentium soluta repellendus? Est distinctio
                   quos quam fugit, repudiandae doloribus nesciunt.</p>
           </div>
       </div>

       <hr>

       <div class="row">
           <div class="col-md-7" style="padding: 80px;">
               <h2>Keuangan</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, perspiciatis. Mollitia veniam,
                   tenetur quisquam eveniet dolor tempore alias maxime praesentium soluta repellendus? Est distinctio
                   quos quam fugit, repudiandae doloribus nesciunt.</p>
           </div>
           <div class="col-md-5">
               <img class="img-thumbnail" src="../image/icpc.png">
           </div>
       </div>

       <hr>
   </div>
    
</body>
</html>



 
     

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
       const items = document.querySelectorAll('.item'),
  controls = document.querySelectorAll('.control'),
  headerItems = document.querySelectorAll('.item-header'),
  descriptionItems = document.querySelectorAll('.item-description'),
  activeDelay = .76,
  interval = 5000;

let current = 0;

const slider = {
  init: () => {
    controls.forEach(control => control.addEventListener('click', (e) => { slider.clickedControl(e) }));
    controls[current].classList.add('active');
    items[current].classList.add('active');
  },
  nextSlide: () => { 
    slider.reset();
    if (current === items.length - 1) current = -1;
    current++;
    controls[current].classList.add('active');
    items[current].classList.add('active');
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
  },
  clickedControl: (e) => {
    slider.reset();
    clearInterval(intervalF);

    const control = e.target,
      dataIndex = Number(control.dataset.index);

    control.classList.add('active');
    items.forEach((item, index) => { 
      if (index === dataIndex) {
        item.classList.add('active');
      }
    })
    current = dataIndex;
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
    intervalF = setInterval(slider.nextSlide, interval);
  },
  reset: () => {
    items.forEach(item => item.classList.remove('active'));
    controls.forEach(control => control.classList.remove('active'));
  },
  transitionDelay: (items) => {
    let seconds;
    
    items.forEach(item => {
      const children = item.childNodes;
      let count = 1,
        delay;
      
      item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

      children.forEach(child => {
        if (child.classList) {
          item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
          child.firstElementChild.style.transitionDelay = `${delay}s`;
          count++;
        }
      })
    })
  },
}

let intervalF = setInterval(slider.nextSlide, interval);
slider.init();
    </script>
 
@endsection