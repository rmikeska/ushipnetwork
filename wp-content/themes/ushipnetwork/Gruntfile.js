module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({browsers: ['last 2 versions']}),
        ]
      },
      dist: {
        src: 'css/style.css',
        dest: 'style.css'
      }
    }
  });

  grunt.loadNpmTasks('grunt-postcss');
};