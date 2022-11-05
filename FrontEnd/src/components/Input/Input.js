import classNames from 'classnames/bind';
import { memo, useState } from 'react';
import styles from './Input.module.scss';

const cx = classNames.bind(styles);

function Input({
   primary = false,
   outline = false,
   text = false,
   rounded = false,
   normalRounded = false,
   disabled = false,
   small = false,
   large = false,
   children,
   className,
   type,
   placeholder,
   onClick,
   onChange,
   ...passProps
}) {
   const props = {
      onClick,
      ...passProps,
   };
   // Remove event listener when btn is disabled
   if (disabled) {
      Object.keys(props).forEach((key) => {
         if (key.startsWith('on') && typeof props[key] === 'function') {
            delete props[key];
         }
      });
   }
   const classes = cx('wrapper', {
      [className]: className,
      primary,
      outline,
      disabled,
      rounded,
      normalRounded,
      small,
      large,
   });
   return <input type={type} placeholder={placeholder} className={classes} {...props} />;
}

export default Input;
