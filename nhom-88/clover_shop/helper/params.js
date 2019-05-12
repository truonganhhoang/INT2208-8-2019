let getParams = (params, property, defaultValue) => {
    if(params.hasOwnProperty(property) && params[property] !== undefined) {
        return params[property];
      }
    return defaultValue;
}

module.exports = {
    getParams
}
