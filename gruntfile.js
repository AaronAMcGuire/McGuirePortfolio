module.exports = function(grunt){

  grunt.initConfig({
    watch: {
         css: {
           files: ['styles/*.scss'],
           tasks: ['cssmin']
         },
         js: {
           files: ['js/*.js'],
           tasks: ['concat']
         }
       },
  concat: {
    options: {
      separator: ';',
    },
    dist: {
      src: [ 'vendors/swiper.min.js','js/script.js'],
      dest: 'js/main.js',
    },
  },
  cssmin: {
  options: {
    shorthandCompacting: false,
    roundingPrecision: -1
  },
  target: {
    files: {
      'styles/stylesheet.min.css': ['vendors/hamburgers.min.css', 'styles/fonts.css', 'vendors/swiper.min.css', 'styles/style.css']
    }
  }
}

});
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', []);

};
