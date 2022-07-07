

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/apropos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/programme.css')); ?>">

<br />
    <div class="container">
      <div class="row">
        <div class="accordion" id="accordionExample">
          <div>
            <div id="headingOne">
              <h2 class="mb-0">
                <h3
                  type="h3"
                  data-toggle="collapse"
                  data-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Présentation <img src="<?php echo e(asset('images/arrow.png')); ?>" />
                </h3>
              </h2>
            </div>

            <div
              id="collapseOne"
              class="collapse"
              aria-labelledby="headingOne"
              data-parent="#accordionExample"
            >
              <div class="collapse-body">
              <?php echo $__env->make('partials.articlePresentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            </div>
          </div>
          <div>
            <div id="headingThree">
              <h2 class="mb-0">
                <h3
                  type="h3"
                  data-toggle="collapse"
                  data-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  L'adhérent <img src="<?php echo e(asset('images/arrow.png')); ?>" alt="" />
                </h3>
              </h2>
            </div>
            <div
              id="collapseThree"
              class="collapse"
              aria-labelledby="headingThree"
              data-parent="#accordionExample"
            >
              <div class="collapse-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Explicabo molestiae ipsa magni eos repellendus animi sint!
                Consequatur, dolorem reiciendis. Nisi sapiente cupiditate
                ducimus obcaecati et optio repellat, rem perferendis nobis
                possimus odio pariatur in quis temporibus enim. Dolor architecto
                eos consequuntur ea odit explicabo voluptate, pariatur inventore
                ipsam impedit minima dolorum qui blanditiis eligendi alias quae
                laboriosam numquam. Placeat totam nemo cum? Similique aut hic
                ea! Ipsam porro aperiam reprehenderit doloribus hic laborum
                culpa quae, esse ea magni? Reprehenderit assumenda quae
                exercitationem? Earum laboriosam provident ullam, ratione
                nesciunt molestias consequatur quas voluptate quibusdam,
                corrupti dolor repellendus totam cupiditate consectetur incidunt
                accusantium quis culpa facere explicabo officiis velit et quae!
                Nobis repellat ipsa laboriosam, praesentium placeat quam
                doloremque delectus ut consequatur obcaecati deserunt neque
                veritatis fuga magnam autem iste magni id! Expedita voluptas
                quam fugit, nesciunt, similique hic consectetur at nam tempore
                magnam qui maiores nobis officia molestias fuga? Dolore quidem
                aperiam ipsa sapiente labore ea voluptas dignissimos
                exercitationem ratione vero ut sint rem, dicta dolores incidunt
                commodi autem? Architecto tempora nulla veniam sapiente ab
                possimus animi dolorum natus dolor eius facilis nisi, dolorem
                rerum magnam velit asperiores harum, reprehenderit perferendis
                vero rem aperiam similique. Accusantium fugit distinctio
                voluptate totam obcaecati.
              </div>
            </div>
          </div>
          <div>
            <div id="headingFour">
              <h2 class="mb-0">
                <h3
                  class="collapsed"
                  type="h3"
                  data-toggle="collapse"
                  data-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  L'accessibilité <img src="<?php echo e(asset('images/arrow.png')); ?>" alt="" />
                </h3>
              </h2>
            </div>
            <div
              id="collapseFour"
              class="collapse"
              aria-labelledby="headingFour"
              data-parent="#accordionExample"
            >
              <div class="collapse-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Explicabo molestiae ipsa magni eos repellendus animi sint!
                Consequatur, dolorem reiciendis. Nisi sapiente cupiditate
                ducimus obcaecati et optio repellat, rem perferendis nobis
                possimus odio pariatur in quis temporibus enim. Dolor architecto
                eos consequuntur ea odit explicabo voluptate, pariatur inventore
                ipsam impedit minima dolorum qui blanditiis eligendi alias quae
                laboriosam numquam. Placeat totam nemo cum? Similique aut hic
                ea! Ipsam porro aperiam reprehenderit doloribus hic laborum
                culpa quae, esse ea magni? Reprehenderit assumenda quae
                exercitationem? Earum laboriosam provident ullam, ratione
                nesciunt molestias consequatur quas voluptate quibusdam,
                corrupti dolor repellendus totam cupiditate consectetur incidunt
                accusantium quis culpa facere explicabo officiis velit et quae!
                Nobis repellat ipsa laboriosam, praesentium placeat quam
                doloremque delectus ut consequatur obcaecati deserunt neque
                veritatis fuga magnam autem iste magni id! Expedita voluptas
                quam fugit, nesciunt, similique hic consectetur at nam tempore
                magnam qui maiores nobis officia molestias fuga? Dolore quidem
                aperiam ipsa sapiente labore ea voluptas dignissimos
                exercitationem ratione vero ut sint rem, dicta dolores incidunt
                commodi autem? Architecto tempora nulla veniam sapiente ab
                possimus animi dolorum natus dolor eius facilis nisi, dolorem
                rerum magnam velit asperiores harum, reprehenderit perferendis
                vero rem aperiam similique. Accusantium fugit distinctio
                voluptate totam obcaecati.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="programmePdf" class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <img class="imgProgramme" src="<?php echo e(asset('images/img.png')); ?>" />
            </div>
            <div class="col-12 col-md-5 text">
                <h4 class="style4">TÉLÉCHARGEZ <br/> NOTRE PROGRAMME</h4>
                <br>
                <button class="style5"> <img id="pictoblanc" src="<?php echo e(asset('images/pictoblanc.png')); ?>"/><img img id="picto" src="<?php echo e(asset('images/picto.png')); ?>"/> PROGRAMME PDF</button>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/collapse.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\autan\resources\views/apropos.blade.php ENDPATH**/ ?>