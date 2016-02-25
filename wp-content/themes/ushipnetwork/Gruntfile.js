module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    autoprefixer: {
      dist: {
        files: {
          'style.css': 'style.css'
        }
      }
    },
    watch: {
      css: {
        files: 'sass/*.scss',
        tasks: ['autoprefixer']
      }
    }
  });

  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-watch');
};