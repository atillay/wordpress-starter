const Encore           = require('@symfony/webpack-encore'),
      LiveReloadPlugin = require('webpack-livereload-plugin');

Encore
    .setOutputPath('./public/wp-content/themes/custom/dist/')
    .setPublicPath('/wp-content/themes/custom/dist')

    .addEntry('js/app', './assets/js/_app.js')
    .autoProvidejQuery()

    .addStyleEntry('css/app', './assets/scss/_app.scss')
    .enableSassLoader()
    .enablePostCssLoader(() => ({plugins: [require('autoprefixer')]}))

    .copyFiles([{ from: './assets/images', to: 'images/[path][name].[ext]' }])

    .configureTerserPlugin(options => options.extractComments = true)
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .disableSingleRuntimeChunk()
;

const config = Encore.getWebpackConfig();
config.watchOptions = {poll: 1000, ignored: /node_modules/}; // Limit file updates for Docker
if (!config.devServer) config.plugins.push(new LiveReloadPlugin()); // Add LiveReload when no dev server

module.exports = config;