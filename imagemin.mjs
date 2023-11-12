import imagemin from 'imagemin-keep-folder'
import imageminMozjpeg from 'imagemin-mozjpeg'
import imageminPngquant from 'imagemin-pngquant'
import imageminGifsicle from 'imagemin-gifsicle'
import imageminSvgo from 'imagemin-svgo'

imagemin(['src/img/**/*.{jpg,png,gif,svg}'], {
  plugins: [
    imageminMozjpeg({ quality: 80 }),
    // imageminPngquant({ quality: [.7, .85] }),
    imageminGifsicle(),
    imageminSvgo()
  ],
  replaceOutputDir: (output) => {
    return output.replace(
      /img\//,
      `../dist/img/`
    )
  }
}).then(() => {
  console.log('Images optimized')
})
