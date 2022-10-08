import Box from '@mui/material/Box';
import InputLabel from '@mui/material/InputLabel';
import MenuItem from '@mui/material/MenuItem';
import FormControl from '@mui/material/FormControl';
import Select from '@mui/material/Select';
import { useState } from 'react';
import classNames from 'classnames/bind';
import styles from './BasicSelect.module.scss';
const cx = classNames.bind(styles);
function BasicSelect() {
   const [age, setAge] = useState('');

   const handleChange = (event) => {
      setAge(event.target.value);
   };
   console.log(age);

   return (
      <FormControl className={cx('wrapper')}>
         <InputLabel className={cx('control')}>Age</InputLabel>
         <Select
            className={cx('menu')}
            labelId="simple-select-label"
            id="simple-select"
            value={age}
            label="Age"
            onChange={handleChange}
         >
            <MenuItem value={10}>Ten</MenuItem>
            <MenuItem value={20}>Twenty</MenuItem>
            <MenuItem value={30}>Thirty</MenuItem>
         </Select>
      </FormControl>
   );
}
export default BasicSelect;
