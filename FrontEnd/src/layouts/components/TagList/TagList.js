import PropTypes from 'prop-types';
import classNames from 'classnames/bind';
import Tag from '~/components/Tag';
import styles from './SearchTag.module.scss';
const cx = classNames.bind(styles);

function TagList({ productShow, brandShow, productList, brandList }) {
   return (
      <div className={cx('wrapper')}>
         {window.innerWidth > 420 &&
            productShow &&
            productList.map((phone) => <Tag name={phone.name} code={phone.id} key={phone.id} />)}
         {brandShow && brandList.map((type) => <Tag name={type.name} code={type.code} key={type.code} />)}
      </div>
   );
}
TagList.propTypes = {
   productShow: PropTypes.bool,
   brandShow: PropTypes.bool,
   productList: PropTypes.array,
   brandList: PropTypes.array,
};
export default TagList;
