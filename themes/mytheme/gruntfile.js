module.exports = function(grunt) {

  grunt.initConfig({
    uglify: {
      options: {
        mangle: false,
        compress: false
      },
      scripts: {
        files: {
          'js/scripts.js': ['js/*.js']
        }
      },
    },
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'compressed'
        },
        files: {                         // Dictionary of files
          'style.css': 'sass/style.scss',       // 'destination': 'source'
        }
      }
    },
    watch: {
      css: {
        files: ['sass/*'],
        tasks: ['sass']
      },
      scripts: {
        files: ['js/*'],
        tasks: ['uglify']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['watch']);

};