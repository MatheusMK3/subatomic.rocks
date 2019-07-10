class Viewport {
  static breakpoints = {
    xs: 0,
    sm: 576,
    md: 768,
    lg: 992,
    xl: 1200
  }
  static width () {
    return window.innerWidth
  }
  static fits (breakpoint) {
    let breakpointValue = Viewport.breakpoints[breakpoint] || Viewport.breakpoints.xs

    return Viewport.width() >= breakpointValue
  }
}

export default Viewport