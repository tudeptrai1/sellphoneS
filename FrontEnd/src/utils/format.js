export const formatCurrency = (n, currency) => {
   return (
      n.toFixed(0).replace(/./g, function (c, i, a) {
         return i > 0 && c !== '.' && (a.length - i) % 3 === 0 ? ',' + c : c;
      }) + currency
   );
};
export const phoneRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
export const emailRe =
   /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
