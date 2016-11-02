
$(document).ready(function(){$(window).scroll(function(){$(window).scrollTop()>220&&$("header").addClass("header_fix"),$(window).scrollTop()<220&&$("header").removeClass("header_fix")})});


var $hamburger=$(".hamburger");
$hamburger.on("click",function(a)
{$hamburger.toggleClass("is-active"),
$("header").toggleClass("menu_open"),
$("menu_toggle").text("close"),
$("body").toggleClass("overflow")
});

var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');


$(document).ready(function() {
    $('.overlay').each(function () {
      var colors = ["#B92E22","#252333","#C03220","#D46748","#930408"];
      var rand = Math.floor(Math.random()*colors.length);
        $(this).css("background-color", colors[rand]);
    });
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
function skillsFunction() {
  var name =  "Aaron McGuire";
  var age = "22";
  var skills = "HTML, SASS, Javascript, Grunt, Git, PHP";
  console.log(name + age + skills);
}
