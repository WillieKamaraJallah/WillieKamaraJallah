// miniprogram/pages/Alex/admin.js
Page({

  /**
   * Page initial data
   */
  data: {

  },

  AddStudent: function(){
    wx.navigateTo({
      url: '/pages/Alex/AddStudent',
    },)
  },

  AddGrades: function(){
    wx.navigateTo({
      url: '/pages/Alex/AddGrades',
    },)
  },

  AddTeacher: function(){
    wx.navigateTo({
      url: '/pages/Alex/AddTeacher',
    },)
  },

  /**
   * Lifecycle function--Called when page load
   */
  onLoad: function (options) {

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