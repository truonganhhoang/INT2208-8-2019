exports.isLoggedIn = function(req, res, next) {
  if (req.isAuthenticated()) {
    req.isLogged = true;
    return next();
  }
  res.redirect("/user/signin");
};

exports.notLoggedIn = function(req, res, next) {
  if (!req.isAuthenticated()) {
    return next();
  }
  res.redirect("/");
};

/**
 * Shuffles array in place. ES6 version
 * @param {Array} a items An array containing the items.
 */
exports.shuffleArray = function(a) {
  for (let i = a.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [a[i], a[j]] = [a[j], a[i]];
  }
  return a;
};
