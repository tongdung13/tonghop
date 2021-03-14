import { from } from "rxjs";
import { INavData }  from '@coreui/angular';

export const navItems: INavData[] = [
  {
    name: 'Product',
    url: '/product',
    icon: 'icon-speedometer'
  },
  {
    name: 'Create',
    url: '/create',
    icon: 'icon-drop'
  }
];
