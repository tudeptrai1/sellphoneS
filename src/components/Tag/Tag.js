import PropTypes from 'prop-types';
import classNames from 'classnames/bind';
import { memo } from 'react';

import config from '~/config';
import styles from './Tag.module.scss';
import { Link } from 'react-router-dom';
const cx = classNames.bind(styles);
function Tag({ name, code }) {
   return (
      <Link to={config.routes.catalog} className={cx('wrapper')}>
         <p>{name}</p>
      </Link>
   );
}
Tag.propTypes = {
   name: PropTypes.string.isRequired,
   code: PropTypes.string,
};
export default memo(Tag);
