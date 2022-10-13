import PropTypes from 'prop-types';
import classNames from 'classnames/bind';
import { Link } from 'react-router-dom';
import styles from './Button.module.scss';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { memo } from 'react';

const cx = classNames.bind(styles);

function Button({
   to,
   href,
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
   leftIcon,
   rightIcon,
   onClick,
   onChange,
   ...passProps
}) {
   let Comp = 'button';
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

   if (to) {
      props.to = to;
      Comp = Link;
   } else if (href) {
      props.href = href;
      Comp = 'a';
   }
   if (onChange) {
      props.onClick = onChange;
   }

   const classes = cx('wrapper', {
      [className]: className,
      primary,
      outline,
      text,
      disabled,
      rounded,
      normalRounded,
      small,
      large,
   });
   console.log(`render ` + className);

   return (
      <Comp className={classes} {...props}>
         {leftIcon && <FontAwesomeIcon className={cx('icon')} icon={leftIcon} />}
         <span className={cx('title')}>{children}</span>
         {rightIcon && <span className={cx('icon')}>{rightIcon}</span>}
      </Comp>
   );
}

Button.propTypes = {
   to: PropTypes.string,
   href: PropTypes.string,
   primary: PropTypes.bool,
   outline: PropTypes.bool,
   text: PropTypes.bool,

   normalRounded: PropTypes.bool,
   disabled: PropTypes.bool,
   small: PropTypes.bool,
   large: PropTypes.bool,
   children: PropTypes.node,
   className: PropTypes.string,
   leftIcon: PropTypes.object,
   rightIcon: PropTypes.node,
   onClick: PropTypes.func,
};

export default memo(Button);
