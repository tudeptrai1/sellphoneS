import PropTypes from 'prop-types';
import { useSelector, useDispatch } from 'react-redux';
import classNames from 'classnames/bind';
import Tag from '~/components/Tag';
import styles from './SearchTag.module.scss';

const cx = classNames.bind(styles);

function TagList() {
   const generalInfo = useSelector((state) => state.generalInfo);
   return (
      <div className={cx('wrapper')}>
         {/* {window.innerWidth > 420 &&
            productShow &&
            productList.map((phone) => <Tag name={phone.name} code={phone.id} key={phone.id} />)} */}
         {Object.keys(generalInfo.listBrand).length > 0 &&
            generalInfo.listBrand.map((brand) => <Tag name={brand.name} code={brand.id} key={brand.id} />)}
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
