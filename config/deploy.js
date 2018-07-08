var FtpDeploy = require('../wp-theme/node_modules/ftp-deploy');
var ftpDeploy = new FtpDeploy();

var config = {
    username: "ataccou",
    password: "6wvMcacpF",
    host: "gusto.metanet.ch",
    port: 21,
    localRoot: "../wp-theme",
    remoteRoot: "/httpdocs/wp-theme",
    //include: ['_static/build/scripts.min.js', '_static/build/styles.min.css'],
    exclude: ['**/.DS_Store', 'npm_debug.log', 'node_modules', 'app/frontend', 'NxModule/**/*.js', 'NxModule/**/*.scss', 'package.json', '.git']
};

ftpDeploy.deploy(config, function(err) {
    if (err) console.log(err);
    else console.log('finished');
});

ftpDeploy.on('uploading', function(data) {
    data.totalFileCount;       // total file count being transferred
    data.transferredFileCount; // number of files transferred
    data.filename;             // partial path with filename being uploaded
});
ftpDeploy.on('uploaded', function(data) {
    console.log(data);         // same data as uploading event
});