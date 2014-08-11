module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss',
                       'bower_components/compass-mixins/lib/',
                       'bower_components/animate-sass/']

      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/app.css': 'scss/app.scss'
        }        
      }
    },

    watch: {
      options: {
        livereload: true
      },
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    },

    requirejs: {
      production: {
        options: {
          baseUrl: 'bower_components',
          include: [
            'jquery-bridget/jquery.bridget',
            'eventEmitter/EventEmitter.js',
            'eventie/eventie.js',
            'doc-ready/doc-ready.js',
            'get-style-property/get-style-property.js',
            'get-size/get-size.js',
            'jquery-bridget/jquery.bridget.js',
            'matches-selector/matches-selector.js',
            'outlayer/item.js',
            'outlayer/outlayer.js',
            'masonry/masonry'
          ],
          /*mainConfigFile: 'masonry/masonry.js',*/
          out: 'js/vendor/masonry/masonry.js',
          paths: {
            /*masonry: '../',*/
            jquery: 'empty:'
          },
          optimize: 'none'
        }
      }
    },  
    uglify: {
        vendor: {
          files: {
            'js/vendor.min.js': ['js/vendor/animated-menu/classie.js',
                                 'js/vendor/animated-menu/gnmenu.js',                                 
                                 'js/vendor/waypoints/waypoints.min.js',
                                 'js/vendor/waypoints/scripts.js',                                 
                                 'js/vendor/slider/owl.carousel.js',
                                 'js/vendor/animation-orbit/animation-orbit.js',
                                 'js/vendor/animation-orbit/custom-button.js',
                                 'js/vendor/masonry/masonry.js'
                                ],
            'js/swiper.min.js': ['js/vendor/pageSwiper/swipeview.js',
                                 'js/vendor/pageSwiper/responsive-swipe.js'
                                ]                   

          }
        }
    },
    compass: {
       dist: {
         options: {
            config: 'config.rb'
        }
      }
    }

  });

  //Foundation tasks
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  //Custom tasks
  grunt.loadNpmTasks('grunt-contrib-requirejs');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');

  //Foundation registered tasks
  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['build','watch']);

  // Custom task for registering
  grunt.registerTask('develop', ['build','requirejs','uglify']);
  //grunt.registerTask('clean', ['build', 'uncss', 'autoprefixer', 'cssmin', 'processhtml']);
};