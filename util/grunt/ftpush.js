// -------------------------------------
// Grunt ftpush
// -------------------------------------

module.exports = {

  // ----- Mirror entire theme to server ----- //

  deploy: {
    auth: {
      host: '178.18.94.73',
      port: 21,
      authKey: 'lokaalgevonden'
    },
    src: 'deploy',
    dest: '/wp-content/themes/slate_heerebout',
    simple: true,
    useList: false
  }
};
