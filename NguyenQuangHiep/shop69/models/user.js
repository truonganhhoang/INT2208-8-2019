//models/user.js
 
// 1
const mongoose = require('mongoose')
const Schema = mongoose.Schema
const bcrypt = require('bcryptjs')
 
// 2
const userSchema = new Schema({
  email: String,
  username: String,
  password: String
}, {
 
  // 3
  timestamps: {
    createdAt: 'createdAt',
    updatedAt: 'updatedAt'
  }
})
 
// 4
const User = mongoose.model('user', userSchema)
module.exports = User

module.exports.hashPassword = async (password) => {
    try {
      const salt = await bcrypt.genSalt(10)
      return await bcrypt.hash(password, salt)
    } catch(error) {
      throw new Error('Hashing failed', error)
    }
  }