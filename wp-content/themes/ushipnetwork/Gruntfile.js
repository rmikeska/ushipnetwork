module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({browsers: ['last 3 versions', 'ie 9', 'ie 10']}),
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