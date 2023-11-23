// 3D Scroll

let zSpacing = -1000,
    lastPos = zSpacing / 5,
    // $frames - родительский элемент
    $frames = document.getElementsByClassName('frame'),
    frames = Array.from($frames),
    zVals = [] // для значений оси z

window.onscroll = function() {
    // меняем поолжение на оси z
    let top = document.documentElement.scrollTop,
        delta = lastPos - top // условный параметр, который либо увел, либо уменьш

    lastPos = top

    // n - текущий обрабатываемый элемент
    // i - его индекс
    frames.forEach(function(n, i) {
        zVals.push((i * zSpacing) + zSpacing) // для пространства до первого кадра
        zVals[i] += delta * -5 // управление скоростью скроллинга
        let frame = frames[i],
            transform = `translateZ(${zVals[i]}px)`
            opacity = zVals[i] < Math.abs(zSpacing) / 1.8 ? 1 : 0
        frame.setAttribute('style', `transform: ${transform}; opacity: ${opacity}`)
    })
}

window.scrollTo(0, 1)