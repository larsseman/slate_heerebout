// -------------------------------------
// Grunt imagemin
// -------------------------------------

module.exports = {

  // ----- Minify all images ----- //

  all: {
  	options: {
  	  optimizationLevel: 3
  	},
    files: [{
      expand: true,
      cwd: 'dev/img',
      src: '*.{png,jpg,gif}',
      dest: 'deploy/img'
    }]
  }
};
