var scrollpos = window.scrollY;
var header = document.getElementById("header");

function add_class_on_scroll() {
    header.classList.add("header_fix");
}

function remove_class_on_scroll() {
    header.classList.remove("header_fix");
}

window.addEventListener('scroll', function(){
    //Here you forgot to update the value
    scrollpos = window.scrollY;

    if(scrollpos > 220){
        add_class_on_scroll();
    }
    else {
        remove_class_on_scroll();
    }
});



var $hamburger=$(".hamburger");
$hamburger.on("click",function(a)
{$hamburger.toggleClass("is-active"),
$("header").toggleClass("menu_open"),
$("body").toggleClass("overflow")
});




if (screen && screen.width > 768) {

      var SEPARATION = 100, AMOUNTX = 50, AMOUNTY = 50;
      var container;
      var camera, scene, renderer;
      var particles, particle, count = 0;
      var mouseX = 0, mouseY = 0;
      var windowHalfX = window.innerWidth / 2;
      var windowHalfY = window.innerHeight / 2;
      init();
      animate();
      function init() {

        container = $('.webgl .background');
        camera = new THREE.PerspectiveCamera( 55, window.innerWidth / window.innerHeight, 1, 10000 );
        camera.position.z = 800;
        camera.position.y = 400;
        scene = new THREE.Scene();
        particles = new Array();
        var PI2 = Math.PI * 2;
        var material = new THREE.SpriteCanvasMaterial( {
          color: 0x948CCC,
          program: function ( context ) {
            context.beginPath();
            context.arc( 0, 0, 0.3, 0, PI2, true );
            context.fill();}} );

        var i = 0;

        for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

          for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

            particle = particles[ i ++ ] = new THREE.Sprite( material );
            particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
            particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
            scene.add( particle );

          }

        }

        renderer = new THREE.CanvasRenderer();
        renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( window.innerWidth, window.innerHeight );
        $(container).append( renderer.domElement );
        document.addEventListener( 'mousemove', onDocumentMouseMove, false );
      }
// re-render on resize fixes sizing issue
      function onWindowResize() {
        windowHalfY = window.innerHeight / 2;
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize( window.innerWidth, window.innerHeight );
      }

      function onDocumentMouseMove( event ) {

        mouseX = event.clientX - windowHalfX;
        mouseY = event.clientY - windowHalfY;

      }

      function animate() {

        requestAnimationFrame( animate );

        render();


      }

      function render() {

        camera.position.x += ( mouseX - camera.position.x ) * .01;
        camera.position.y += ( - mouseY - camera.position.y ) * .01;
        camera.lookAt( scene.position );

        var i = 0;

        for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

          for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

            particle = particles[ i++ ];
            particle.position.y = ( Math.sin( ( ix + count ) * 0.3 ) * 50 ) +
              ( Math.sin( ( iy + count ) * 0.5 ) * 50 );
            particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 4 +
              ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 4;

          }

        }

        renderer.render( scene, camera );

        count += 0.1;

      }
}
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));
