// miniprogram/pages/Alex/index.js
Page({

  /**
   * Page initial data
   */
  data: {

  },

  /**
   * Lifecycle function--Called when page load
   */
  onLoad: function (options) {

  },


  nextpage: function(){
    wx.navigateTo({
      url: '/pages/Alex/report',
    },)
},
loginpage: function(){
  wx.navigateTo({
    url: '/pages/Alex/login',
  },)
},

schoolpage: function(){
  wx.navigateTo({
    url: '/pages/Alex/school',
  },)
},
fraudpage: function(){
  wx.navigateTo({
    url: '/pages/Alex/fraud',
  },)
},

  /**
   * Lifecycle function--Called when page is initially rendered
   */
  onReady: function () {

  },

  /**
   * Lifecycle function--Called when page show
   */
  onShow: function () {

  },

  /**
   * Lifecycle function--Called when page hide
   */
  onHide: function () {

  },

  /**
   * Lifecycle function--Called when page unload
   */
  onUnload: function () {

  },

  /**
   * Page event handler function--Called when user drop down
   */
  onPullDownRefresh: function () {

  },

  /**
   * Called when page reach bottom
   */
  onReachBottom: function () {

  },

  /**
   * Called when user click on the top right corner to share
   */
  onShareAppMessage: function () {

  }
})